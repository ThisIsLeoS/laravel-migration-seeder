EXERCISE SPECIFICATIONS (ITALIAN)

Utilizzando come esempio il codice scritto da Boolean (repo: https://bitbucket.org/booleancareers/laravel-migration-seeder), creare una nuova entità in tutte le sue parti.
L'entità di cui parliamo sarà: fumetti. 
Ogni fumetto avrà le seguenti proprietà:
Titolo, Autore, Anno, Recensione e Voto, oltre ovviamente a timestamp (created_at e updated_at aggiunti in automatico da laravel con la funzione timestamp) e l'id.
Creare una migration che crei la tabella nel nostro db
Creare un model in cui definiremo tutte le proprietà come fillable, attraverso la variabile procted, come da esempio. 
Creiamo un seeder che popoli la nostra tabella, attraverso l'utilizzo di faker, che ci aiuterà a popolarla randomicamente. (https://github.com/fzaninotto/Faker per tutti i metodi utilizzabili) 
Creare una rotta, un controller e una view sulla falsa riga di quelle già presenti per movie e completare l'esercizio. 