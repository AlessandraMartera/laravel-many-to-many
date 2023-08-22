## Todo

### Milestone 2
Continuare a lavorare sul codice del progetto , ma in una nuova `repo` e aggiungendo una nuova entità: `Type`
Questa entità rappresenta la tipologia di progetto ed è in **relazione one to many** con i *progetti*.

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
- creare la `migration` per la tabella *types*
- creare il `model` *Type*
- creare il `factory` e `seeder` per il model `Type`
- modificare il `seeder` dei `project` per includere la valorizzazione della chiave esterna (vedi `PostTableSeeder`)
- creare la `migration` di *modifica per la tabella projects* per aggiungere la nuova *chiave esterna*
- aggiungere ai `model` *Type* e *Project* i metodi per definire la relazione `one to many`
- visualizzare nella *pagina di dettaglio di un progetto* la tipologia associata, se presente
- permettere all’utente di *associare una tipologia* nella pagina di `creazione` di un progetto


### Milestone 2
Aggiungere una nuova entità `Technology`. Questa entità rappresenta le tecnologie utilizzate ed è in relazione **many to many** con i *progetti*.

I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
- creare la *migration* per la tabella `technologies`
- creare il *model* `Technology`
- creare la *migration* per la tabella magica *project_technology*
- aggiungere ai *model Technology e Project* i metodi per definire la relazione **many to many**
- aggiungere `factory` e `seeder` per la creazione di dati **fake** all'interno sia della tabella `Technology` che della tabella magica `project_technology`
- visualizzare nella *pagina di dettaglio* di un progetto *le tecnologie utilizzate*, se presenti
- permettere all’*utente di associare le tecnologie* nella pagina di `creazione` e `modifica` di un progetto


### Milestone 3 ( work in prgress )
Aggiungere immagine alla tabella `projects` come campo testuale per salvare il **path del file immagine** (*ATTENZIONE*: il campo *DEVE* essere `nullable`).
Attivare lo **storage** (comando `php artisan storage:link`).
Modificare i `form` di *create*/*edit* per permettere il caricamento delle immagini come visto a lezione. 
Rappresentare le immagini se presenti nella `show`.
