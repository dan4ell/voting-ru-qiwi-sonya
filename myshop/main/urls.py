from django.urls import path
from . import views
urlpatterns = [
    path('', views.index, name='index'),
    path('spotify', views.Spotify, name='spotify'),
    path('vpn', views.VPN, name='vpn'),
    path('steam', views.steam, name='steam'),
    path('cinema', views.Cinema, name='cinema'),
    path('qiwi', views.Qiwi, name='qiwi'),
    path('proxy', views.Proxy, name='proxy'),
    path('error', views.error, name='error'),
    path('success/<int:summa>', views.success, name='success'),
    path('code/<int:numberURL>', views.code, name='code')
]