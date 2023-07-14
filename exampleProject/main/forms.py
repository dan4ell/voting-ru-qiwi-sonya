from django import forms
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User
from django.forms.utils import ErrorDict
class CustomRegistrationForm(UserCreationForm):
    error_messages = {
        'password_mismatch': "Пароли не совпадают.",
        'password_too_short': "Пароль слишком короткий. Используйте минимум 8 цифр.",
        'password_too_common': "Пароль слишком простой.",
        'password_numeric': "Пароль не может содержать только числа",
        'username_exists': "Это имя пользователя уже занято.",
        'invalid': "Введите допустимое имя пользователя. Допускаются только буквы, цифры и символы",
    }

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields['password1'].help_text = ''
        self.fields['username'].help_text = ''
        self.fields['password2'].help_text = ''
        self.fields['password1'].widget.attrs['class'] = 'custom-class'
        self.fields['username'].widget.attrs['class'] = 'custom-class'
        self.fields['password2'].widget.attrs['class'] = 'custom-class'
        self.fields['password1'].widget.attrs['name'] = 'password1'
        self.fields['username'].widget.attrs['name'] = 'username'
        self.fields['password2'].widget.attrs['name'] = 'password2'

    def clean_password1(self):
        password1 = self.cleaned_data.get("password1")

        if len(password1) < 8:
            raise forms.ValidationError(
                self.error_messages['password_too_short'],
                code='password_too_short',
            )

        if password1.isdigit():
            raise forms.ValidationError(
                self.error_messages['password_numeric'],
                code='password_numeric',
            )


        return password1

    def clean_username(self):
        username = self.cleaned_data.get('username')
        if User.objects.filter(username=username).exists():
            raise forms.ValidationError(
                self.error_messages['username_exists'],
                code='username_exists'
            )
        return username

    def clean_password2(self):
        password2 = self.cleaned_data.get("password2")

        if len(password2) < 8:
            raise forms.ValidationError(
                self.error_messages['password_too_short'],
                code='password_too_short',
            )

        if password2.isdigit():
            raise forms.ValidationError(
                self.error_messages['password_numeric'],
                code='password_numeric',
            )


        return password2

    class Meta:
        model = User
        fields = ['username', 'password1', 'password2']