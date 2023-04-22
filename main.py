from telethon.sync import TelegramClient, events
from collections import defaultdict
import time

# Укажите ваши данные авторизации (номер телефона, код подтверждения и сессионные данные)
api_id = 20284232 #твой api id
api_hash = 'c105f028226982bd7db257eb99c2623b' #твой api hash
phone_number = '79060694083'  # Укажите ваш номер телефона
client = TelegramClient('session_name', api_id, api_hash)

#подсчет кол-ва месседжей от мамонта
sent_messages = {}

user_states = defaultdict(int)

# Определить заготовленные ответы для каждого состояния пользователя
responses = {
    0: 'hello.oga', #аудиофайлы в формате .oga, преобразовать в этот формат можно при помощи ffmpeg
    1: 'howareyou.oga',
    2: 'i-ustala.oga',
    3: 'Я же моделью работаю, у нас сейчас конкурс проходит, сможешь пожалуйста проголосовать за меня? 1 голос 5000сум стоит, если проголосуешь за мной должок!😍 Ссылка - ТЫК',
    4: 'Мне кажется ты еще не проголосовал  😞, мне очень сильно поможет твой голос зайка, как проголосуешь отправь скриншот пожалуйста, а дальше проси всё что хочешь!💋💋',
}
# Обработка входящих сообщений
@client.on(events.NewMessage(incoming=True))
async def handle_new_message(event):
    # Фильтруем сообщения только от пользователя (не от бота) в личные сообщения
    if event.is_private and not (await event.get_sender()).bot:
        # Отправляем ответное сообщение от вашего аккаунта
        user_id = event.chat_id

        # Получить состояние пользователя из памяти длинного хранения
        state = user_states[user_id]
        entity = await client.get_entity(user_id)
        user_name = entity.first_name
        user_name_to_send_audio = entity.username

        # with open('hello.oga', 'rb') as hello:
        #     message_audio = await client.send_file(f'{user_name_to_send_audio}',
        #                                      file=hello,
        #                                      voice_note=True,
        #                                      mime_type='audio/ogg')
        #     print('Голосовое сообщение отправлено успешно!')
        # проотец конвертирования в ГС, оставил на всякий случай

        #если месседжей от мамонта меньше пяти
        if sent_messages.get(user_id, 0) < 5:
            if isinstance(responses[state], str) and responses[state].endswith('.oga'):
                await client.send_file(
                    user_name_to_send_audio,
                    file = responses[state],  # получаем имя файла из списка responses
                    voice_note=True,
                    mime_type = 'audio/ogg'
                )
                sent_messages[user_id] = sent_messages.get(user_id, 0) + 1
            else:
                response_text = responses[state].replace('[имя пользователя]', user_name)
                await client.send_message(
                    user_id,
                    response_text,
                    reply_to=event
                )
                sent_messages[user_id] = sent_messages.get(user_id, 0) + 1
        #если месседжей больше пяти
        else:
            sent_messages[user_id] = sent_messages.get(user_id, 0) + 1
            pass

        # Отправить ответ пользователю на основе его состояния
        # response = responses[state].replace('[имя пользователя]', f'{user_name}')
        # time.sleep(1)
        # await event.respond(response)
        # оставил на всякий случай

        # Обновить состояние пользователя в памяти
        new_state = (state + 1) % 5
        user_states[user_id] = new_state


# Запускаем клиент и ждем сообщений
client.start(phone_number)
client.run_until_disconnected()
