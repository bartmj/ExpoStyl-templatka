# ExpoStyl
Propozycja redesignu strony firmy ExpoStyl. Jest oparta na bootstrapowej templatce wizixo-1.2.0. Projekt wymagał skonfigurowania wysyłania maili przy użyciu PHP w pliku contact-action.
Oprócz tego została dokonana modyfikacja kodu JavaScript i jQuery, pierwotnie po powiększeniu obrazka w galerii, można było przeklikać do innej kategori stoisk co mogłoby wprowadzać użytkowanika w błąd, wynikało to z niewspółgrania wtyczki Isotope oraz fancybox.
Zmodyfikowany fragment kodu znajduje się w pliku dist/assets/js/functions.js od 63 do 106 linijki, po naciśnięciu przycisku z wyborem kategorii obrazki z innych kategorii są przenoszone do tabelki, aby nie obejmowała ich wtyczka fancybox, oprócz tego wciśnięcie przycisku powoduje podpięcie obrazków już będących w tabeli do elementu html.
