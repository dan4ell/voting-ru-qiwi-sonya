from django.urls import path, include
from . import views
urlpatterns = [
    path('', views.index, name='index'),
    path('registration/', views.register, name='registration'),
    path('login/', views.login_view, name='login'),
    path('dashboard/', views.dashboard, name='dashboard'),
]