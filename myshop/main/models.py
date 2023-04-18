from django.db import models
class vpn(models.Model):
    surfshark = models.CharField(max_length=50)
    expressVPN = models.CharField(max_length=50)
    hideME = models.CharField(max_length=50)
    protonPREMIUM = models.CharField(max_length=50)
class steam(models.Model):
    low_mmr_account = models.CharField(max_length=50)
    medium_mmr_account = models.CharField(max_length=50)
    high_mmr_account = models.CharField(max_length=50)
class spotify(models.Model):
    spotify_premium = models.CharField(max_length=50)
class proxy(models.Model):
    socks_proxy = models.CharField(max_length=50)
    ipv_four_proxy = models.CharField(max_length=50)
class qiwi(models.Model):
    qiwi = models.CharField(max_length=50)
class cinema(models.Model):
    netflix = models.CharField(max_length=50)
    kinopoisk = models.CharField(max_length=50)
    ivi = models.CharField(max_length=50)
# Create your models here.
