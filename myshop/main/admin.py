from django.contrib import admin
from .models import vpn,proxy,steam,cinema,qiwi,spotify
admin.site.register(vpn)
admin.site.register(qiwi)
admin.site.register(proxy)
admin.site.register(spotify)
admin.site.register(cinema)
admin.site.register(steam)
# Register your models here.
