<?php
/*
* Language file for Help Desk Software HESK (www.hesk.com)
* Language: POLISH
* Version: 2.1 from 7th August 2009
* Author: Paweł Danielewski (www.paweldanielewski.pl)
*/

/* Change the language name and encoding to your own language */
$hesklang['LANGUAGE']='Polski';
$hesklang['ENCODING']='UTF-8';

/* ERROR MESSAGES */
$hesklang['cant_connect_db']='Błąd połączenia z bazą';
$hesklang['invalid_action']='Nieprawidłowa operacja';
$hesklang['select_username']='Proszę wybrać swoją nazwę użytkownika';
$hesklang['enter_pass']='Proszę podać swoje hasło';
$hesklang['cant_sql']='Nie można wywołać SQL';
$hesklang['contact_webmsater']='Prosimy powiadomić Webmastera na';
$hesklang['mysql_said']='MySQL zwróciło';
$hesklang['wrong_pass']='Nieprawidłowe hasło.';
$hesklang['session_expired']='Sesja wygasła, zaloguj się poniższym formularzem.';
$hesklang['attempt']='Nieprawidłowa próba!';
$hesklang['not_authorized_tickets']='Nie masz uprawnień, aby zobaczyć zgłoszenia wewnątrz tej kategorii!';
$hesklang['must_be_admin']='Nie masz uprawnień do oglądania tej strony! Aby obejrzeć tę stronę musisz być zalogowany jako administrator.';
$hesklang['no_session']='Nie można uruchomić nowej sesji!';
$hesklang['error']='Błąd';
$hesklang['int_error']='Wewnętrzny błąd skryptu';
$hesklang['no_trackID']='Brak numeru ID';
$hesklang['status_not_valid']='Status nieprawidłowy';
$hesklang['trackID_not_found']='Nie znaleziono numeru ID';
$hesklang['enter_message']='Wprowadź swoją wiadomość';
$hesklang['select_priority']='Ustaw priorytet zgłoszenia';
$hesklang['ticket_not_found']='Zgłoszenia nie znaleziono! Upewnij się, że został wprowadzony poprawny numer ID zgłoszenia!';
$hesklang['no_selected']='Nie wybrano zgłoszeń więc nic nie zmieniono';
$hesklang['id_not_valid']='Numer ID nieprawidłowy';
$hesklang['enter_id']='Wprowadź numer ID zgłoszenia';
$hesklang['enter_name']='Wprowadź imię i nazwisko';
$hesklang['enter_date']='Wprowadź datę poszukiwania';
$hesklang['date_not_valid']='To nie jest prawidłowa data. Proszę wpisać datę w formacie <b>RRRR-MM-DD</ b>';
$hesklang['enter_subject']='Wprowadź temat zgłoszenia';
$hesklang['invalid_search']='Nieprawidłowa próba poszukiwania';
$hesklang['choose_cat_ren']='Wybierz kategorie do zmiany nazwy';
$hesklang['cat_ren_name']='Wprowadź nową nazwę kategorii';
$hesklang['cat_not_found']='Nie znaleziono kategorii';
$hesklang['enter_cat_name']='Wprowadź nazwę kategorii';
$hesklang['no_cat_id']='Brak numeru ID kategorii';
$hesklang['cant_del_default_cat']='Nie możesz usunąć podstawowej kategorii, możesz zmienić tylko jej nazwę!';
$hesklang['no_valid_id']='Błędny numer ID użytkownika';
$hesklang['user_not_found']='Użytkownika nie znaleziono';
$hesklang['enter_real_name']='Wprowadź imię i nazwisko';
$hesklang['enter_valid_email']='Wprowadź adres email';
$hesklang['enter_username']='Wprowadź swój login';
$hesklang['asign_one_cat']='Przypisz użytkownika do przynajmniej jednej kategorii';
$hesklang['signature_long']='Wpis jest za długi. Maksymalnie może mieć 255 znaków.';
$hesklang['password_not_valid']='Hasło musi mieć minimum 5 znaków i być kombinacją liter oraz cyfr.';
$hesklang['confirm_user_pass']='Powtórz hasło';
$hesklang['passwords_not_same']='Hasła nie są identyczne!';
$hesklang['cant_del_admin']='Nie można usunąć domyślnego administratora!';
$hesklang['cant_del_own']='Nie można usunąć własnego profilu w którym jesteś zalogowany!';
$hesklang['enter_your_name']='Podaj swoje imię i nazwisko';
$hesklang['enter_message']='Proszę wpisać treść wiadomości';
$hesklang['sel_app_cat']='Wybierz odpowiednią kategorię';
$hesklang['sel_app_priority']='Proszę wybrać odpowiedni priorytet';
$hesklang['enter_ticket_subject']='Wprowadź temat wiadomości';
$hesklang['user_not_found_nothing_edit']='Nie znaleziono użytkownika lub nie ma nic do zmiany';

/* ADMIN PANEL */
$hesklang['admin_login']='Login Administratora';
$hesklang['administrator']='Administrator';
$hesklang['login']='Login';
$hesklang['user']='Użytkownik';
$hesklang['username']='Nazwa użytkownika';
$hesklang['pass']='Hasło';
$hesklang['confirm_pass']='Potwierdź hasło';
$hesklang['logged_out']='Wylogowano';
$hesklang['logout']='Wyloguj';
$hesklang['logout_success']='Zostałeś prawidłowo wylogowany!';
$hesklang['click_login']='Kliknij aby się zalogować';
$hesklang['back']='Powrót';
$hesklang['displaying_pages']='Wyświetlono <b>%d</b> zgłoszeń. Strony:';
$hesklang['trackID']='Numer ID';
$hesklang['timestamp']='Czas';
$hesklang['name']='Imię i nazwisko';
$hesklang['subject']='Temat';
$hesklang['status']='Status';
$hesklang['priority']='Priorytet';
$hesklang['open']='Otwarty'; // Open STATUS
$hesklang['open_action']='Stwórz zgłoszenie'; // Open ACTION
$hesklang['close']='Zakończony'; // Close STATUS
$hesklang['close_action']='Zakończ zgłoszenie'; // Close ACTION
$hesklang['any_status']='Dowolny status';
$hesklang['high']='Wysoki';
$hesklang['medium']='Średni';
$hesklang['low']='Niski';
$hesklang['del_selected']='Usuń wybrane zgłoszenia';
$hesklang['manage_cat']='Zarządzaj kategoriami';
$hesklang['profile']='Twój profil';
$hesklang['show_tickets']='Lista zgłoszeń';
$hesklang['sort_by']='Sortuj wg.';
$hesklang['date_posted']='Daty dodania';
$hesklang['category']='Kategorii';
$hesklang['any_cat']='Dowolnej kategorii';
$hesklang['order']='Kolejność';
$hesklang['ascending']='wzrastająco';
$hesklang['descending']='zmniejszająco';
$hesklang['display']='Wyświetlono';
$hesklang['tickets_page']='zgłoszeń na stronę';
$hesklang['find_ticket']='Znajdź zgłoszeń';
$hesklang['find_ticket_by']='Znajdź zgłoszenie wg';
$hesklang['yyyy_mm_dd']='RRRR-MM-DD';
$hesklang['results_page']='wyników na stronę';
$hesklang['opened']='stworzony'; // The ticket has been OPENED
$hesklang['closed']='zamknięty'; // The ticked has been CLOSED
$hesklang['ticket']='Zgłoszenie';
$hesklang['tickets']='Zgłoszenia';
$hesklang['ticket_been']='To zgłoszenie zostało';
$hesklang['view_ticket']='Zobacz zgłoszenie';
$hesklang['open_tickets']='Otwarte zgłoszenia';
$hesklang['remove_statement']='Usuń &quot;Powered by&quot;';
$hesklang['click_info']='Tutaj więcej info';
$hesklang['rate_script']='Oceń skrypt';
$hesklang['please_rate']='If you like this script please rate it or even write a review at';
$hesklang['new_reply_staff']='Nowa odpowiedź do zgłoszenia';
$hesklang['reply_added']='Odpowiedź dodano';
$hesklang['reply_submitted']='Odpowiedź została wprowadzona';
$hesklang['ticket_marked']='Zgłoszenie oznaczono';
$hesklang['ticket_status']='Status zgłoszenia';
$hesklang['replies']='Odpowiedzi';
$hesklang['date']='Data';
$hesklang['email']='E-mail';
$hesklang['ip']='IP';
$hesklang['message']='Wiadomość';
$hesklang['add_reply']='Dodaj odpowiedź';
$hesklang['close_this_ticket']='Zamknij to zgłoszenie';
$hesklang['change_priority']='Zmień priorytet';
$hesklang['attach_sign']='Dodaj podpis';
$hesklang['profile_settings']='Ustawienia profilu';
$hesklang['submit_reply']='Odpowiedź';
$hesklang['support_panel']='Panel supportu';
$hesklang['ticket_trackID']='Numer ID zgłoszenia';
$hesklang['c2c']='Kliknij aby kontynuować';
$hesklang['tickets_deleted']='Zgłoszenia usunięte';
$hesklang['num_tickets_deleted']='<b>%d</b> zgłoszenia usunięte';
$hesklang['found_num_tickets']='Znaleziono <b>%d</b> zgłoszeń. Strony:';
$hesklang['confirm_del_cat']='Czy na pewno chcesz usunąć tę kategorię?';
$hesklang['cat_intro']='Tutaj możesz zarządzać kategoriami. Możesz kategoryzować zgłoszenia wg. działu. Tym sposobem podzielisz wiadomości wg. np. problemów - mysql/domeny/hosting itd.';
$hesklang['cat_name']='Nazwa kategorii';
$hesklang['remove']='Usuń';
$hesklang['add_cat']='Dodaj nową kategorię';
$hesklang['max_chars']='maksymalnie 40 znaków';
$hesklang['create_cat']='Utwórz kategorię';
$hesklang['ren_cat']='Zmień nazwę kategorii';
$hesklang['to']='do';
$hesklang['cat_added']='Dodano kategorię';
$hesklang['cat_name_added']='Kategoria %s została prawidłowo dodana';
$hesklang['cat_renamed']='Zmienono nazwę kategorii';
$hesklang['cat_renamed_to']='Wybrana kategoria została pomyślnie zmieniona na';
$hesklang['cat_removed']='Usunięto kategorię';
$hesklang['cat_removed_db']='Wybrana kategoria został pomyślnie usunięta z bazy danych';
$hesklang['sure_remove_user']='Czy na pewno chcesz usunąć tego użytkownika?';
$hesklang['manage_users']='Zarządzanie użytkownikami';
$hesklang['users_intro']='Tutaj możesz zarządzać użytkownikami, którzy mogą zalogować się do panelu administratora i
udzielać odpowiedzi. Administratorzy mogą przeglądać / edytować zgłoszenia w każdej kategorii oraz mieć dostęp
do wszystkich funkcji panelu administratora (zarządzanie użytkownikami, zarządzanie kategoriami, ...), natomiast
Inni użytkownicy mogą tylko przeglądać i udzielać odpowiedzi na zgłoszenia w swoich kategoriach.';
$hesklang['yes']='TAK';
$hesklang['no']='NIE';
$hesklang['edit']='Edycja';
$hesklang['add_user']='Dodaj nowego użytkownika';
$hesklang['req_marked_with']='Wymagane pola są oznaczone';
$hesklang['real_name']='Użytkownik';
$hesklang['signature_max']='Podpis (max 255 znaków)';
$hesklang['sign_extra']='Kod HTML jest niedozwolony. Linki będą klikalne.';
$hesklang['create_user']='Utwórz użytkownika';
$hesklang['editing_user']='Edycja użytkownika';
$hesklang['user_added']='Dodano użytkownika';
$hesklang['user_added_success']='Nowy użytkownik %s z hasłem %s został prawidłowo dodany';
$hesklang['profile_updated']='Profil zaktualizowano';
$hesklang['profile_updated_success']='Profil użytkownika został zaktualizowany';
$hesklang['user_removed']='Użytkownik został usunięty';
$hesklang['sel_user_removed']='Wybrany użytkownik został pomyślnie usunięty z bazy danych';
$hesklang['profile_for']='Profil dla';
$hesklang['new_pass']='Nowe hasło';
$hesklang['update_profile']='Aktualizuj profil';
$hesklang['notify_new_posts']='Informuj mnie o nowych zgłoszeniach i postach w mojej kategorii';
$hesklang['profile_updated']='Profil zaktualizowano';
$hesklang['profile_updated_success']='Twój profil został zaktualizowany';
$hesklang['view_profile']='Zobacz profil';
$hesklang['new_reply_ticket']='Nowa odpowiedź do zgłoszenia';
$hesklang['new_ticket_submitted']='Dodano nowe zgłoszenie';
$hesklang['user_profile_updated_success']='Profil tego użytkownika został zaktualizowany';
$hesklang['printer_friendly']='Wersja do wydruku';
$hesklang['end_ticket']='--- Koniec zgloszen ---';

/* CUSTOMER INTERFACE */
$hesklang['your_ticket_been']='Twoje zgłoszenie zostało';
$hesklang['view_your_ticket']='Pokaż swoje zgłoszenie';
$hesklang['submit_ticket']='Prześlij zgłoszenie';
$hesklang['sub_ticket']='Prześlij zgłoszenie';
$hesklang['use_form_below']='Proszę użyć poniższego formularza, aby przesłać zgłoszenie. Wymagane pola są oznaczone ';
$hesklang['before_submit']='Przed wysłaniem upewnij się, że';
$hesklang['all_info_in']='Wszystkie niezbędne informacje zostały wprowadzone';
$hesklang['all_error_free']='Wszystkie informacje są poprawne i bezbłędne';
$hesklang['we_have']='Mamy';
$hesklang['recorded_ip']='zapisany jako Twój numer IP';
$hesklang['recorded_time']='zapisany aktualny czas zgłoszenia';
$hesklang['save_changes']='Zapisz zmiany';
$hesklang['reply_submitted']='Odpowiedź została przesłana';
$hesklang['reply_submitted_success']='Twoja odpowiedź do tego zgłoszenia została przesłana pomyślnie';
$hesklang['view_your_ticket']='Zobacz swoje zgłoszenie';
$hesklang['ticket_received']='Twoje zgłoszenie zostało odebrane';
$hesklang['ticket_submitted']='Zgłoszenie zostało dodane';
$hesklang['ticket_submitted_success']='Twoje zgłoszenie zostało przesłane pomyślnie! Numer ID (identyfikacyjny) zgłoszenia to';
$hesklang['your_ticket']='Twoje zgłoszenie';


/* ADDED IN HESK VERSION 0.94 */
$hesklang['check_updates']='Upewnij się, że zainstalowano najnowszą wersję Hesk';
$hesklang['check4updates']='Sprawdź aktualizacje';
$hesklang['open']='Nowy';
$hesklang['wait_reply']='Oczekuje odpowiedzi';
$hesklang['wait_staff_reply']='Oczekuje odpowiedzi od pracownika';
$hesklang['wait_cust_reply']='Oczekuje odpowiedzi od klienta';
$hesklang['replied']='Odpowiedziano';
$hesklang['closed']='Zakończony';
$hesklang['last_update']='Ostatni wpis';
$hesklang['last_replier']='Ostatni odpowiedział';
$hesklang['staff']='Pracownicy';
$hesklang['customer']='Klient';
$hesklang['archived']='Zaarchiwizowane';
$hesklang['close_selected']='Oznacz wybrane zgłoszenia jako zamknięte';
$hesklang['execute']='Wykonaj';
$hesklang['saved_replies']='Gotowe odpowiedzi';
$hesklang['manage_saved']='Gotowe odpowiedzi';
$hesklang['manage_intro']='Tutaj można dodawać i zarządzać gotowymi odpowiedziami. Są one powszechnie stosowane odpowiedzi, które są mniej więcej takie same dla każdego klienta. Należy używać Gotowe odpowiedzi aby uniknąć konieczności wpisywania tych samych odpowiedzi od różnych klientów wiele razy.';
$hesklang['saved_title']='Tytuł gotowej odpowiedz';
$hesklang['no_saved']='Brak gotowych odpowiedzi';
$hesklang['delete_saved']='Jesteś pewny, że chcesz usunąć tę odpowiedź ?';
$hesklang['new_saved']='Dodaj lub edytuj gotową odpowiedź';
$hesklang['canned_add']='Utwórz nową gotową odpowiedź';
$hesklang['canned_edit']='Edytuj wybrane odpowiedzi';
$hesklang['saved_title']='Tytuł max 50 znaków';
$hesklang['save_reply']='Zapisz odpowiedź';
$hesklang['saved']='Odpowiedź zapisano';
$hesklang['your_saved']='Zapisano odpowiedź do użytku w przyszłości';
$hesklang['ent_saved_title']='Wprowadź tytuł odpowiedzi';
$hesklang['ent_saved_msg']='Wprowadź treść odpowiedzi';
$hesklang['saved_removed']='Odpowiedź skasowano';
$hesklang['saved_rem_full']='Usunięto z bazy gotową odpowiedź';
$hesklang['clip_alt']='Ta wiadomość ma załączniki';
$hesklang['attachments']='Załączniki';
$hesklang['accepted_types']='Akceptowane typy plików';
$hesklang['max_file_size']='Maksymalny rozmiar pliku';
$hesklang['fill_all']='Brakuje wymaganego pola';
$hesklang['file_too_large']='Twój plik %s jest zbyt duży';
$hesklang['type_not_allowed']='Nieprawidłowy typ pliku (%s)';
$hesklang['cannot_move_tmp']='Nie można przenieść plik do folderu załączników, sprawdź ścieżkę ustawień serwera';
$hesklang['created_on']='Utworzono';
$hesklang['add_archive']='Dodaj do archiwum';
$hesklang['remove_archive']='Usuń z archiwum';
$hesklang['added_archive']='Dodano do archiwum';
$hesklang['removed_archive']='Usunięto z archiwum';
$hesklang['added2archive']='Zgłoszenie zostało dodane do archiwum';
$hesklang['removedfromarchive']='Zgłoszenie zostało usunięty z archiwum';
$hesklang['tickets_closed']='Zgłoszenia zamknięte';
$hesklang['num_tickets_closed']='<b>%d</b> zgłoszeń zostało zamkniętych';
$hesklang['select_saved']='Wybierz gotową odpowiedź';
$hesklang['select_empty']='Wybierz / pusta';
$hesklang['insert_special']='Wstaw specjalny tag (zostanie zastąpiony info klienta)';
$hesklang['move_to_catgory']='Przenieś zgłoszenie do';
$hesklang['move']='Przenieś';
$hesklang['select']=' - Wybierz - ';
$hesklang['moved']='Przeniesiono zgłoszenie';
$hesklang['moved_to']='Zgłoszenie przeniesiono do nowej kategorii';
$hesklang['url']='URL';
$hesklang['all_not_closed']='Wszystkie oprócz zamkniętych';
$hesklang['disp_only_archived']='Wyświetl tylko zarchiwizowane';
$hesklang['search_only_archived']='Szukał wyłącznie w zarchiwizowanych';
$hesklang['chg_all']='Zmień wszystkie';
$hesklang['settings']='Ustawienia';
$hesklang['settings_intro']='Narzędzie to służy do konfigurowania help desk. Aby uzyskać więcej informacji na temat wszystkich ustawień i opcji kliknij przycisk Pomoc Zaloguj się lub sprawdź w pliku readme.html.';
$hesklang['all_req']='Wszystkie pola (z wyjątkiem zablokowanych) są wymagane!';
$hesklang['wbst_title']='Tytuł witryny';
$hesklang['wbst_url']='Adres URL witryny';
$hesklang['email_sup']='Email pomocy technicznej';
$hesklang['email_wm']='Adres email webmastera';
$hesklang['email_noreply']='Adres email typu noreplay';
$hesklang['max_listings']='Wyników na stronę';
$hesklang['print_size']='Rozmiar czcionki w dok. do wydruku';
$hesklang['debug_mode']='Tryb debbugera';
$hesklang['on']='Włączony';
$hesklang['off']='Wyłączony';
$hesklang['use_secimg']='Korzystaj z obrazka captcha';
$hesklang['secimg_no']='Niedostępny';
$hesklang['attach_use']='Korzystaj z załączników';
$hesklang['attach_num']='Ilość na zgłoszenie';
$hesklang['attach_size']='Rozmiar maksymalny pliku (Kb)';
$hesklang['attach_type']='Dostępne typy plików';
$hesklang['place_after']='Na końcu';
$hesklang['place_before']='Na początku wiadomości';
$hesklang['custom_f']='Dowolne pole';
$hesklang['custom_u']='Używaj tego pola';
$hesklang['custom_n']='Nazwa pola';
$hesklang['custom_l']='Maxymalna długość znaków';
$hesklang['hesk_path']='Ścieżka systemowa root/path';
$hesklang['db_host']='Host mysql';
$hesklang['db_name']='Nazwa bazy mysql';
$hesklang['db_user']='User bazy mysql';
$hesklang['db_pass']='Haslo mysql';
$hesklang['err_sname']='Wprowadź tytuł witryny';
$hesklang['err_surl']='Proszę podać adres URL witryny. Upewnij się, że jest poprawny adres URL (zaczynać się od http:// lub https: / /)';
$hesklang['err_supmail']='Adres email - główny - supportu';
$hesklang['err_wmmail']='Adres email webmastera';
$hesklang['err_nomail']='Adres email typu noreply@';
$hesklang['err_htitle']='Wprowadź tytuł systemu supportowego';
$hesklang['err_hurl']='Podaj adres URL do Hesk - uwzględnij katalogi jeśli nie jest na domenie. Upewnij się, że jest poprawny adres URL (zaczynać się od http:// lub https ://)';
$hesklang['err_spath']='Proszę wprowadzić do systemu (root serwer) ścieżkę do folderu Hesk ';
$hesklang['err_lang']='Proszę wybrać język Hesk';
$hesklang['err_nolang']='Język pliku podanego nie istnieje w folderze language! Upewnij się, że plik zostanie wysłany przed zmianą ustawień językowych.';
$hesklang['err_max']='Proszę wprowadzić max. ilość zgłoszeń wyświetlanych na stronie';
$hesklang['err_psize']='Proszę podać rozmiar czcionki druku';
$hesklang['err_dbhost'] = 'Proszę wprowadzić hosta bazy danych MySQL';
$hesklang['err_dbname'] = 'Podaj nazwę bazy danych MySQL ';
$hesklang['err_dbuser'] = 'Proszę wprowadzić nazwę użytkownika bazy danych MySQL ';
$hesklang['err_dbpass'] = 'Proszę wprowadzić hasło bazy danych MySQL ';
$hesklang['err_dbconn'] = 'Nie można połączyć się do bazy danych MySQL przy użyciu dostarczonego informacji! Proszę dokładnie sprawdzić ustawienia bazy danych ';
$hesklang['err_dbsele'] = 'Nie udało się wybrać bazy danych MySQL, należy dwukrotnie sprawdzić nazwę bazy danych';
$hesklang['err_custname'] = 'Proszę podać nazwisko (-a) na wybrane pole opcjonalne (s) ';
$hesklang['err_openset'] = 'Nie można nadpisywać pliku <b> hesk_settings.inc.php </ b>. Nadaj chmod 666 (rw-rw-rw-)';
$hesklang['set_saved']='Ustawienia zapisano';
$hesklang['set_were_saved']='Ustawienia zostały pomyślnie zapisane';
$hesklang['sec_img']='Obrazek bezpieczeństwa captcha';
$hesklang['sec_enter']='Proszę podać numer zabezpieczenia z obrazka powyżej';
$hesklang['sec_miss']='Proszę podać numer zabezpieczenia';
$hesklang['sec_wrng']='Niepoprawny numer zabezpieczenia';
$hesklang['submit_problems']='Cofnij się i poprawk następujące błędy';
$hesklang['cat_order']='Kolejność kategorii';
$hesklang['reply_order']='Kolejność gotowych odpowiedzi';
$hesklang['move_up']='W górę';
$hesklang['move_dn']='W dół';
$hesklang['cat_move_id']='Brakuje kodu ID kategorii';
$hesklang['reply_move_id']='Brakuje kodu ID gotowej odpowiedzi';
$hesklang['forgot_tid']='Zapomniałeś numeru ID zgłoszenia?';
$hesklang['tid_mail']='Wprowadź swój adres email a numery ID zgłoszeń zostaną do Ciebie przesłane';
$hesklang['tid_send']='Proszę przesłać numery ID zgłoszeń';
$hesklang['tid_not_found']='Nie znaleziono zgłoszeń dla tego adresu email.';
$hesklang['tid_email_subject']='System pomocy technicznej';
$hesklang['tid_sent']='Numery ID zostały wysłąny';
$hesklang['tid_sent2']='Adres z numerami ID został do Ciebie przesłany.';
$hesklang['check_spambox']='Upewnij się, że wiadomość nie trafiła do katalogu spam!';
$hesklang['reply_not_found']='Nie znaleziono gotowej odpowiedzi';
$hesklang['exists']='Istnieje';
$hesklang['no_exists']='Nie istnieje';
$hesklang['writable']='zapisywalny';
$hesklang['not_writable']='Niezapisywalny';
$hesklang['disabled']='wyłączono';
$hesklang['e_settings']='Nie będzie można zapisać ustawienia, chyba że jest to plik zapisany przez skrypt. Prosimy zapoznać się z treścią pliku Readme dla dalszych instrukcji!';
$hesklang['e_attdir']='Nie będą mogli plików załączników, chyba że istnieje i jest zapisywalny przez skrypt. Prosimy zapoznać się z treścią pliku Readme dla dalszych instrukcji!';
$hesklang['e_save_settings']='Nie można zapisać ustawień, ponieważ <b> hesk_settings.inc.php </ b> nie jest nadpisywalny (prawa dostępu).';
$hesklang['e_attach']='Wyłączono <b>załączniki</b> ponieważ katalog /attachments nie jest zapisywalny (prawa dostępu).';
$hesklang['go']='Dalej';


/* ADDED OR CHANGED IN VERSION 2.0 */
$hesklang['v']='Wersja HESK';
$hesklang['check_status']='Sprawdzenie statusu';
$hesklang['sub_support']='Prześlij zgłoszenie';
$hesklang['open_ticket']='Prześlij nowe zgłoszenie do wybranego działu';
$hesklang['view_existing']='Wybierz istniejące zgłoszenie';
$hesklang['vet']='Zobacz zgłoszenia które dotychczas przesłałeś';
$hesklang['enter_user']='Wprowadź nazwę użytkownika';
$hesklang['remember_user']='Pamiętaj nazwę użytkownika';
$hesklang['wrong_user']='Niepoprawna nazwa';
$hesklang['duplicate_user']='Musisz wybrać unikalny login dla każdego konta!';
$hesklang['no_permission']='Twoje konto nie ma praw dostępu do wykonania tej operacji.';
$hesklang['tickets_on_pages']='Liczba zgłoszeń: %d Ilość stron: %d'; // First %d is replaced with number of tickets, second %d with number of pages
$hesklang['jump_page']='Idź do strony:';
$hesklang['no_tickets_open']='Nie znaleziono wiadomości otwartych';
$hesklang['no_tickets_crit']='Brak wyników. Zmień kryteria wyszukiwania.';
$hesklang['confirm_execute']='Czy napewno chcesz kontynuować?';
$hesklang['legend']='INFO';
$hesklang['main_page']='Start';
$hesklang['menu_users']='Użytkownicy';
$hesklang['menu_cat']='Kategorie';
$hesklang['menu_can']='Gotowe odpowiedzi';
$hesklang['menu_profile']='Profile';
$hesklang['menu_kb']='Encyklopedia'; // Admin MENU item
$hesklang['kb_text']='Encyklopedia'; // Item visible to customers
$hesklang['viewkb']='Zobacz całą encyklopedię';
$hesklang['kb']='Zarządzaj Encyklopedią';
$hesklang['kb_intro']='Encyklopedia to zbiór odpowiedzi na najczęściej zadawane pytania (FAQ) oraz artykuły, które dostarczają tych zasobów dla klientów.
Wszechstronny i dobrze napisany Baza może drastycznie zmniejszyć liczbę biletów otrzymasz wsparcie i zaoszczędzić sporo czasu. Możesz umówić się artykuły w kategorii
i podkategorie.'; // Description in ADMIN panel
$hesklang['kb_is']='Encyklopedia jest zbiorem artykułów z każdego aspektu dotyczącego prowadzenia strony. Znajdziesz tu informacje od A do Z począwszy od wyboru hosting, konfiguracji, instalację po wskazówki dotyczące promowania stron internetowych.'; // Description for CUSTOMERS
$hesklang['new_kb_art']='Nowy artykuł';
$hesklang['kb_cat']='Kategoria';
$hesklang['kb_subject']='Temat';
$hesklang['kb_content']='Zawartość';
$hesklang['kb_type']='Typ';
$hesklang['kb_published']='Opublikowany';
$hesklang['kb_published2']='Artykuł jest dostępny dla każdego odwiedzającego Encyklopedię';
$hesklang['kb_private']='Prywatny';
$hesklang['kb_private2']='Artykuł prywatny może być czytany tylko przez pracowników serwisu';
$hesklang['kb_draft']='Wersja robocza';
$hesklang['kb_draft2']='Artykuł jest zapisany ale jeszcze go nie opublikowano. Może być czytany tylko przez pracownika serwisu z dostępem do zarządzania Encyklopedią';
$hesklang['kb_links']='<i><span class="notice"><b>Uwaga!</b></span><br />Wprowadź prawidłowy kod &lt;head&gt; oraz &lt;body&gt; tags, tylko zawartość!</i>';
$hesklang['kb_ehtml']='To jest kod HTML. Zostanie zmieniony na xHTML.';
$hesklang['kb_dhtml']='To jest czysty text. Linki zostaną zamienione na te z możliwością kliknięcia.';
$hesklang['kb_save']='Zapisz artykuł';
$hesklang['kb_e_subj']='Dodaj temat artykułu!';
$hesklang['kb_e_cont']='Wprowadź zawartość artykułu!';
$hesklang['kb_art_added']='Dodano artykuł';
$hesklang['your_kb_added']='Nowy artykuł został prawidłowo dodany do Encyklopedii';
$hesklang['kb_art_deleted']='Artykuły zostały usunięte';
$hesklang['your_kb_deleted']='Wybrany artykuł Encyklopedii został pomyślnie usunięty';
$hesklang['kb_art_mod']='Artykuły zmodyfikowano';
$hesklang['your_kb_mod']='Wprowadzone zmiany do wybranego artykułu zostały zapisane';
$hesklang['kb_cat_new']='Nowa podkategoria Encyklopedii';
$hesklang['kb_cat_parent']='Kategoria powiązana (główna)';
$hesklang['kb_cat_sub']='Podkategorie';
$hesklang['kb_cat_title']='Tytuł kategorii';
$hesklang['kb_cat_published']='Kategoria jest widoczna dla wszystkich odwiedzających Encyklopedię.';
$hesklang['kb_cat_private']='Kategoria może być czytana tylko przez pracowników serwisu.';
$hesklang['kb_cat_add']='Dodaj kategorię';
$hesklang['kb_cat_e_title']='Wprowadź tytuł kategorii!';
$hesklang['kb_cat_added']='Kategoria została dodana';
$hesklang['kb_cat_added2']='Nowa kategoria została pomyślnie dodana do bazy!';
$hesklang['kb_cat_man']='Zarządzaj kategoriami Encyklopedii';
$hesklang['kb_cat_edit']='Edytuj szczegóły kategorii';
$hesklang['kb_cat_inv']='Niepoprawna kategoria';
$hesklang['kb_cat_art']='Artykuły w tej kategorii';
$hesklang['kb_p_art']='+ Artykuł';
$hesklang['kb_p_art2']='Dodaj nowy artykuł do wybranej kategorii.';
$hesklang['kb_add_art']='Dodaj Artykuł';
$hesklang['kb_p_cat']='+ Kategoria';
$hesklang['kb_p_cat2']='utwórz nową podkategorię w wybranej kategorii';
$hesklang['kb_add_cat']='Dodaj kategorię';
$hesklang['kb_p_man']='Zarządzaj';
$hesklang['kb_p_man2']='zarządzaj wybraną kategorią (edycja, usuwanie, dodawanie artykułów)';
$hesklang['kb_main']='The main knowledgebase category cannot be deleted or moved.';
$hesklang['kb_no_art']='Brak artykułów w tej kategorii';
$hesklang['author']='Autor';
$hesklang['views']='Wyświetlenia';
$hesklang['delete']='Usuń';
$hesklang['rating']='Ocena';
$hesklang['votes']='Głosy:';
$hesklang['kb_rated']='Artykuł oceniono na %s/5.0';
$hesklang['kb_not_rated']='Artykułu jeszcze nie oceniono';
$hesklang['del_art']='Czy na pewno chcesz usunąć wybrany artykuł?';
$hesklang['kb_art_id']='Brakujący lub niepoprawny numer ID artykułu!';
$hesklang['kb_art_edit']='Edytuj artykuł';
$hesklang['revhist']='Historia edycji';
$hesklang['revision1']='<li class="smaller">Na %s dodanych przez %s</li>';
$hesklang['revision2']='<li class="smaller">Na %s zmodyfikowanych przez %s</li>';
$hesklang['kb_order']='Kolejność';
$hesklang['kb_delcat']='Czy napewno chcesz usunąć tę kategorię?';
$hesklang['kb_cat_mod']='Zmodyfikowano kategorię';
$hesklang['your_cat_mod']='Zmiany do wybranej kategorii zostały wprowadzone pomyślnie';
$hesklang['kb_cat_del']='Kategoria Encyklopedii została usunięta';
$hesklang['kb_cat_dlt']='Kategoria Encyklopedii została usunięta.';
$hesklang['allowed_cat']='Kategorie';
$hesklang['allow_feat']='Funkcje';
$hesklang['can_view_tickets']='Zobacz zgłoszenia';
$hesklang['can_reply_tickets']='Odpowiedź w zgłoszeniach';
$hesklang['can_assign_tickets']='Przypisz zgłoszenia';
$hesklang['can_del_tickets']='Usuń zgłoszenia';
$hesklang['can_edit_tickets']='Edytuj odpowiedzi do zgłoszeń';
$hesklang['can_change_cat']='Zmień kategorię zgłoszenia';
$hesklang['can_man_kb']='Zarządzaj Encyklopedią';
$hesklang['can_man_users']='Zarządzaj użytkownikami';
$hesklang['can_man_cat']='Zarządzaj kategoriami';
$hesklang['can_man_canned']='Zarządzaj gotowymi odpowiedziami';
$hesklang['can_man_settings']='Zarządzaj ustawieniami HESK';
$hesklang['can_del_notes']='Usuń notatki do zgłoszeń';
$hesklang['dan']='użytkownicy mogą usunąć swoje notatki zgłoszeń, wybierz to tylko jeśli chcesz, aby umożliwić temu użytkownikowi był w stanie usunąć notatki od innych użytkowników';
$hesklang['in_all_cat']='wyłącznie w dozwolonych kategoriach';
$hesklang['admin_can']='(dostęp do wszystkich funkcji i kategorii)';
$hesklang['staff_can']='(możesz ograniczyć funkcje i kategorie)';
$hesklang['asign_one_feat']='Proszę przypisać co najmniej jedną funkcję, do tego użytkownika!';
$hesklang['na_view_tickets']='Nie masz uprawnień, aby zobaczyć zgłoszenia';
$hesklang['sh']='Pokaż / Ukryj';
$hesklang['support_remove']='Jeśli chcesz możesz wspomóc projekt HESK PHPJunkyard wykupując za symboliczną opłatę licencję komercyjną.';
$hesklang['support_notice']='Niestety, ta sekcja może być ukryta jedynie jeśli zakupisz licencję HESK!';
$hesklang['rart']='Czy ten artykuł okazał się pomocny?';
$hesklang['r']='Czy ta odpowiedź okazała się pomocna?';
$hesklang['tyr']='Dziękujemy za dodanie oceny';
$hesklang['cw']='Zamknij okno';
$hesklang['cw2']='Zamknij okno i prześlij zgłoszenie';
$hesklang['rh']='Oceniono jako <i>pomocny</i>';
$hesklang['rnh']='Oceniono jako <i>niepomocny</i>';
$hesklang['ar']='Dokonano już oceny';
$hesklang['rated']='Użytkownik ocenił %s/5.0 (ocen %s)';
$hesklang['not_rated']='Użytkownik jeszcze nie oceniał';
$hesklang['rdis']='System ocen został wyłączony';
$hesklang['kbdis']='Encyklopedia została wyłączona.';
$hesklang['kbpart']='Niestety ale nie masz dostępu do tego artykułu';
$hesklang['popart']='Najlepsze artykuły Encyklopedii:';
$hesklang['latart']='Ostatnio dodane artykuły:';
$hesklang['m']='Więcej tematów';
$hesklang['ac']='Artykuły w tej kategorii:';
$hesklang['noa']='Nie dodano jeszcze artykułów.';
$hesklang['noac']='Nie dodano jeszcze artykułów w tej kategorii';
$hesklang['dta']='Data dodania';
$hesklang['ad']='Szczegóły artykułow';
$hesklang['aid']='ID artykułu';
$hesklang['as']='Rozwiązanie';
$hesklang['search']='Szukaj';
$hesklang['sr']='Wyniki wyszukiwania';
$hesklang['nosr']='Nie znaleziono pasujących artykułów. Spróbuj przejrzeć Encyklopedię  lub prześlij zgłoszenie do obsługi serwisu.';
$hesklang['rv']='Zresetuj liczbę wyświetleń';
$hesklang['rr']='Zresetuj oddane głosy';
$hesklang['opt']='Opcje';
$hesklang['delcat']='Usuń kategorię';
$hesklang['move1']='Przenieś artykuły do kategorii głównej';
$hesklang['move2']='Usuń artykuły w tej kategorii';
$hesklang['sc']='Sugerowane artykuły Encyklopedii';
$hesklang['not']='Zgłoszenia w kategorii'; // Number of all tickets in category
$hesklang['graph']='Wykres';
$hesklang['lu']='Lista użytkowników';
$hesklang['aclose']='Autozamykanie zgłoszeń';
$hesklang['aclose2']='liczba dni po ostatniej odpowiedzi pracownika';
$hesklang['s_ucrt']='Ponowne otwieranie zgłoszeń';
$hesklang['urate']='Odpowiedzi ocen';
$hesklang['hesk_url']='Help desk URL';
$hesklang['hesk_title']='Tytuł dla systemu HESK';
$hesklang['server_time']='Czas serwera';
$hesklang['t_h']='godzin';
$hesklang['cid']='Numer trackingowy ID zgłoszenia';
$hesklang['t_m']='minuty';
$hesklang['day']='czas letni';
$hesklang['tfor']='Format czasu';
$hesklang['prefix']='Prefix tabeli mysql';
$hesklang['s_ekb']='Encyklopedia (FAQ)';
$hesklang['s_kbs']='Włącz wyszukiwarkę FAQ';
$hesklang['s_kbr']='Włącz system ocen FAQ';
$hesklang['s_maxsr']='Max wyników na stronę';
$hesklang['s_suggest']='Sugerowanie artykułów w FAQ';
$hesklang['s_spop']='Pokaż popularne artykuły';
$hesklang['s_slat']='Pokaż ostatnie artykuły';
$hesklang['s_onin']='na stronie <a href="../" target="_blank">indeksowej centrum pomocy</a> ';
$hesklang['s_onkb']='na stronie <a href="../knowledgebase.php" target="_blank">indeksowej Encyklopedii</a> ';
$hesklang['s_scol']='Liczba kategorii w rzędzie';
$hesklang['s_ptxt']='Ilość znaków krótkiego podglądu artykułu';
$hesklang['s_psubart']='Artykuły podkategorii';
$hesklang['enable']='Wyłącz';
$hesklang['s_type']='Typ';
$hesklang['custom_r']='Wymagany';
$hesklang['custom_place']='Lokalizacja';
$hesklang['custom_use']='Własne pola';
$hesklang['stf']='Pole tekstowe';
$hesklang['stb']='Pole textowe typu textarea';
$hesklang['srb']='Przycisk typu radio';
$hesklang['ssb']='Kwadrat typu checkbox';
$hesklang['db']='Baza danych';
$hesklang['hd']='Ustawienia helpdesk`u';
$hesklang['gs']='Ustawienia generalne';
$hesklang['cwin']='Zamknij okno';
$hesklang['defw']='Wartość domyślna';
$hesklang['ok']='OK';
$hesklang['ns']='Dostępne są opcje dodatkowe dla tego pola (własnego). Kliknij OK a następnie ZAPISZ ZMIANY w panelu ustawień admina!';
$hesklang['rows']='Rzędy (wysokość)';
$hesklang['cols']='Kolumny (szerokość)';
$hesklang['opt2']='Opcje dla tego typu przycisku (radio button) wprowadź oddzielnie w nowej linii (po każdej enter), wpisz minimum 2 opcje!';
$hesklang['opt3']='Opcje dla tego typu przycisku (select box) wprowadź oddzielnie w nowej linii (po każdej enter), wpisz minimum 2 opcje';
$hesklang['atl2']='Wprowadź minimum dwie opcje (jedna na każdą linię)!';
$hesklang['notes']='Notatki';
$hesklang['addnote']='+ Dodaj notatkę';
$hesklang['noteby']='Zanotowano przez';
$hesklang['delnote']='Usuń notatkę';
$hesklang['noteerr']='Notatka została już usunięta lub wprowadzono błędne dane';
$hesklang['s']='Wprowadź';
$hesklang['nhid']='Notatki są ukryte dla klientów!';
$hesklang['delt']='Usuń tę wiadomość';
$hesklang['edtt']='Edytuj wiadomość';
$hesklang['edt1']='Wiadomość została zmodyfikowana';
$hesklang['edt2']='Zmiany dla wybranej wiadomości zostały zapisane';
$hesklang['dele']='Usuń to zgłoszenie';
$hesklang['repd']='Wiadomość usunięto';
$hesklang['repl']='Wybrana wiadomość została skasowana';
$hesklang['tickets_found']='Wyniki wyszukiwania';
$hesklang['al']='Link Administratora';
$hesklang['ap']='Idź do Panelu Administratora';
$hesklang['dap']='Wyświetl link do Panelu Administratora na <a href="../" target="_blank">stronie indeksowej centrum pomocy HESK</a>';
$hesklang['ntmc']='Nowe zgłoszenie przeniesiono do Twojej kategorii';
$hesklang['csrt']='Aktualny czas serwera:';
$hesklang['q_miss']='Odpowiedź na pytanie zabezpieczające (antyspam)';
$hesklang['use_q']='Korzystaj z pytania zabezpieczającego (antyspam)';
$hesklang['q_q']='-&gt; Pytanie (HTML code is <font class="success">dozwolone</font>)';
$hesklang['q_a']='-&gt; Odpowiedź';
$hesklang['err_qask'] = 'Wprowadź pytanie zabezpieczające (antyspam)';
$hesklang['err_qans'] = 'Wprowadź odpowiedź na pytanie zabezpieczające (antyspam)';
$hesklang['genq'] = 'Wygeneruj losowe pytanie';


/* Added or modified in version 2.1 */
$hesklang['amo']='Dodaj więcej';
$hesklang['delatt']='Usunąć wprowadzony załącznik ?';
$hesklang['kb_att_rem']='Wybrany załącznik został usunięty';
$hesklang['inv_att_id']='Błędny numer ID załącznika!';
$hesklang['scb']='pole zaznaczenia';
$hesklang['opt4']='Opcje dla tego pola wprowadzasz oddzielnie w każdej linii. Każde na jedną linię. Możliwe jest wprowadzenie multiwyboru. Musisz dodać minimum 2 opcje!';
$hesklang['autologin']='Zaloguj mnie automatycznie przy każdej wizycie na tej stronie';
$hesklang['just_user']='Zapamiętaj jedynie moją nazwę użytkownika';
$hesklang['nothx']='Nie, dziękuję';
$hesklang['pinfo']='Informacja profilu';
$hesklang['sig']='Podpis';
$hesklang['pref']='Ustawienia';
$hesklang['aftrep']='Po dokonaniu odpowiedzi na zgłoszenie';
$hesklang['showtic']='Pokaż treść zgłoszenia na które odpowiedziałem';
$hesklang['gomain']='Powróć do strony startowej panelu';
$hesklang['shownext']='Otwórz kolejną wiadomość która oczekuje na moją odpowiedź (jeśli brak zostaniesz przekierowany na stronę startową panelu)';
$hesklang['rssn']='Kolejne zgłoszenie oczekująca Twojej odpowiedzi';
$hesklang['mrep']='Zastępowanie aktualnego zgłoszenia';
$hesklang['madd']='Dodaj na samym dole';
$hesklang['priv']='Kategorie z dostępem WYŁĄCZNIE dla pracowników serwisu są oznaczone znakiem *';
$hesklang['gopr']='Odwiedź Encyklopedię';
$hesklang['inve']='Niepoprawny plik email';
$hesklang['emfm']='Brakuje pliku email';
$hesklang['lgs']='Ustawienia wersji językowych';
$hesklang['hesk_lang']='Domyślny język';
$hesklang['s_mlang']='Wiele języków';
$hesklang['s_mlange']='Jeśli włączone, klienci będą mieli dostęp do centrum pomocy HESK we wszystkich dostępnych językach. Włącz tylko jeśli obsługujesz te języki!';
$hesklang['s_inl']='Test folderu z wersjami językowymi';
$hesklang['s_inle']='Testuję pliki językowe. Jedynie te pliki które są poprawnie napisane i przejdą testy HESK mogą być wykorzystywane w systemie pomocy HESK! Więcej szczegółów w pliku readme.html';
$hesklang['ta']='Testuj ponownie';
$hesklang['alo']='Zezwól na automatyczne logowanie przy wizycie na stronie';
$hesklang['chol']='Preferowany język';
$hesklang['mmdl']='Oznacz jako mój preferowany język';
$hesklang['warn']='UWAGA';
$hesklang['dmod']='Tryb debbugera jest włączony. Pamiętaj aby wyłączyć ten tryb przy uruchomieniu systemu HESK w wersji ostatecznej.';
$hesklang['kb_spar']='Ta kategoria nie może być kategorią główną dla samej siebie!';
$hesklang['mysql_root']='Hasło do bazy mysql jest puste. Czy tak chcesz to zostawić ? sugerowana zmiana aby poprawić bezpieczeństwo!';
$hesklang['chg']='Zmień';
$hesklang['inpr']='Nieprawidłowa wartość priorytetu';
$hesklang['chpri']='Priorytet zmieniono';
$hesklang['chpri2']='Priorytety zgłoszeń zostały zmienione na %s';
$hesklang['selcan']='Wybierz gotową odpowiedź którą chcesz edytować';
$hesklang['q_wrng']='Błędna odpowiedź zabezpieczająca (antyspamowa)';
$hesklang['cndupl']='Już posiadasz kategorię o tej nazwię. Wprowadź nową, unikalną nazwę kategorii.';
$hesklang['wsel']='Zaznacz pole wg. którego chcesz rozpocząć wyszukiwanie';
$hesklang['can_add_archive']='Możliwe dodanie zgłoszeń do archiwum';
$hesklang['nsfo']='Nie znaleziono sugestii. Proszę zamknąć okno.';


/* DO NOT CHANGE BELOW */
if (!defined('IN_SCRIPT')) {echo "No syntax errors detected in $_SERVER[PHP_SELF]";exit();}
?>
