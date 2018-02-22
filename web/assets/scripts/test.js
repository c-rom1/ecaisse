alert("{{ path('liste_animal', {'troupeau_id': animal.troupeau.id}) }}");

var url = Routing.generate('liste_animal', {
    'troupeau_id': 1
});
alert(url);