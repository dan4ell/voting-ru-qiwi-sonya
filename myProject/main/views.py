from django.shortcuts import render, redirect
from django.urls import reverse
from django.http import HttpResponseRedirect

def index(request):
    if request.method == 'POST':
        if 'button-start' in request.POST:
            url = reverse('about')
            return HttpResponseRedirect(url)
    return render(request, 'main/index.html')

def about(request):
    return render(request, 'main/about.html')

# Create your views here.
