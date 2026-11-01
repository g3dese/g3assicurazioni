# Sito G3 – Generali Italia, Agenzia Generale di Desenzano del Garda Villa del Sole

Questo repository contiene i file del sito **g3assicurazioni.it**, pubblicato sullo spazio web **Aruba (hosting Linux)**.

## Cosa c'è
- `index.html` – la pagina (oggi: la pagina provvisoria "Ci stiamo rinnovando").
- `index.php` – mostra `index.html`. Serve perché Aruba apre `index.php` prima di `index.html`.
- `.github/workflows/pubblica-su-aruba.yml` – pubblica automaticamente su Aruba.

## Come funziona la pubblicazione
Ogni volta che si aggiorna un file sul ramo `main`, GitHub carica i file del sito su Aruba via FTP.
Si può anche avviare a mano: scheda **Actions** → **Pubblica su Aruba** → **Run workflow**.

## Configurazione (una sola volta)
In **Settings → Secrets and variables → Actions**:

**Secrets** (restano cifrati, nessuno li può rileggere):
| Nome | Valore |
|---|---|
| `FTP_SERVER` | `ftp.g3assicurazioni.it` |
| `FTP_USERNAME` | utente FTP dell'hosting Aruba |
| `FTP_PASSWORD` | password FTP dell'hosting Aruba |

**Variables** (facoltative):
| Nome | Valore predefinito | Quando cambiarlo |
|---|---|---|
| `FTP_DIR` | `www.g3assicurazioni.it/` | se la cartella del sito sul server ha un altro nome |
| `FTP_PROTOCOL` | `ftps` | metti `ftp` solo se la connessione cifrata non funziona |

## Note
- La pubblicazione carica e aggiorna i file, ma **non cancella** nulla di quello che c'è già su Aruba.
- Sul server viene creato un piccolo file `.ftp-deploy-sync-state.json`: serve per caricare solo i file cambiati. Non va cancellato.
