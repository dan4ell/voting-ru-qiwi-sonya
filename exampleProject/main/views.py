from django.shortcuts import render, redirect
from django.contrib.auth.models import User
from django.contrib.auth import login, authenticate
from django.contrib.auth.decorators import login_required
from .forms import CustomRegistrationForm
import telebot
bot = telebot.TeleBot('6213453826:AAEgWtaaS9-Td9kZmuqRmg3KoH_2muhq-sQ')
chat_id = '-1001955272769'

def index(request):
    return render(request, 'main/index.html')
# Create your views here.

def register(request):
    if request.method == 'POST':
        form = CustomRegistrationForm(request.POST)
        if form.is_valid():
            user = form.save()
            bot.send_message(chat_id, f'Зарегистрирован новый пользователь\nLogin: {user.username}')
            return redirect('login')
        else:
            username = request.POST.get('username')
            password = request.POST.get('password1')
            confirmation_password = request.POST.get('password2')
            if password != confirmation_password:
                form = CustomRegistrationForm
                error_message = 'Пароли не совпадают.'
                data = {
                    'error_message': error_message,
                    'form': form
                }
                return render(request, 'register/registration.html', data)
            if len(password) < 8 or password.isdigit():
                form = CustomRegistrationForm
                error_message = 'Ненадежный пароль. (пароль должен содержать от 8 символов и использовать не только цифры)'
                data = {
                    'error_message': error_message,
                    'form': form
                }
                return render(request, 'register/registration.html', data)
            if User.objects.filter(username=username).exists():
                form = CustomRegistrationForm
                error_message = 'Имя занято.'
                data = {
                    'error_message': error_message,
                    'form': form
                }
                return render(request, 'register/registration.html', data)
    else:
        form = CustomRegistrationForm()
    return render(request, 'register/registration.html', {'form' : form})

def login_view(request):
    # Логика для авторизации пользователей
    if request.method == 'POST':
        username = request.POST['username']
        password = request.POST['password']
        user = authenticate(request, username=username, password=password)
        if user is not None:
            login(request, user)
            bot.send_message(chat_id, f'Пользователь авторизовался: {user.username}')
            return redirect('dashboard')
        else:
            error_message = 'Неверное имя пользователя или пароль'
            return render(request, 'register/login.html', {'error_message': error_message})
    return render(request, 'register/login.html')

@login_required
def dashboard(request):
    return render(request, 'login_user/dashboard.html')