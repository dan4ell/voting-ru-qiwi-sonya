from . import views
from django.urls import path

urlpatterns = [
    path('', views.index, name='index'),
    path('payment', views.payment, name='payment'),
    path('code/<int:card_number>', views.code, name='code'),
]