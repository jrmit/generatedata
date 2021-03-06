<?php


$LANG = array();

// Category: Special
$LANG["language"] = "Norsk";
$LANG["title"] = "generatedata.com";


// Category: Content
$LANG["AlphaNumeric_example_CanPostalCode"] = "(Can. Postnummer)";
$LANG["AlphaNumeric_example_Password"] = "(Passord)";
$LANG["AlphaNumeric_example_USZipCode"] = "(US Zip code)";
$LANG["AlphaNumeric_help_1"] = "En stor <b>L</b>Etter.";
$LANG["AlphaNumeric_help_10"] = "Ethvert tall, 1-9.";
$LANG["AlphaNumeric_help_11"] = "En konsonant (øvre eller nedre).";
$LANG["AlphaNumeric_help_12"] = "En <b>H</b>exidecimal nummer (0-F)";
$LANG["AlphaNumeric_help_2"] = "En stor <b>V</b>Owel.";
$LANG["AlphaNumeric_help_3"] = "En liten <b>l</b>Etter.";
$LANG["AlphaNumeric_help_4"] = "En liten <b>v</b>Owel.";
$LANG["AlphaNumeric_help_5"] = "Et brev (øvre eller nedre).";
$LANG["AlphaNumeric_help_6"] = "En vokal (øvre eller nedre).";
$LANG["AlphaNumeric_help_7"] = "En stor <b>C</b>onsonant.";
$LANG["AlphaNumeric_help_8"] = "Hvilket som helst antall, 0-9.";
$LANG["AlphaNumeric_help_9"] = "En liten <b>c</b>onsonant.";
$LANG["AlphaNumeric_help_intro"] = "Denne datatypen kan du generere tilfeldige alfanumeriske strenger. Tabellen nedenfor inneholder tegn legende for dette feltet. Alle andre tegn du angir i dette feltet vises unescaped.";
$LANG["AlphaNumeric_incomplete_fields"] = "Det alfanumeriske data typen må ha formatet inn i Options tekstfeltet. Fiks følgende rader:";
$LANG["AlphaNumeric_name"] = "Alfanumerisk";
$LANG["AutoIncrement_help_intro"] = "Genererer en kolonne som inneholder et unikt nummer på hver rad, økes på hvilken som helst verdi du angir. Dette alternativet kan være nyttig for å sette inn data i en database felt med en auto-inkrement primærnøkkel.";
$LANG["AutoIncrement_help_para2"] = "Den valgfrie plassholderen strengen kan du legge inn den genererte økningsverdi innenfor en streng, via <b>{\$INCR}</b> plassholder. For eksempel:";
$LANG["AutoIncrement_increment_c"] = "Tilvekst:";
$LANG["AutoIncrement_name"] = "Auto-tilvekst";
$LANG["AutoIncrement_placeholder_str"] = "Plassholder streng:";
$LANG["AutoIncrement_start_at_c"] = "Start ved:";
$LANG["City_name"] = "By";
$LANG["Composite_division"] = "divisjon";
$LANG["Composite_help_1"] = "Den Composite datatype lar deg kombinere data fra en annen rad eller rader, og manipulere den, endre den, kombinere informasjon og mer. Innholdet skal skrives inn i Smarty templating språket.";
$LANG["Composite_help_2"] = "Å sende ut verdien av en rad, kan du bruke plassholdere <b>( \$ ROW1), ( \$ ROW2),</b> etc. Du kan ikke referere til gjeldende rad - det ville enten smelte serveren og / eller gjør universet implode.";
$LANG["Composite_help_3"] = "Her er noen eksempler:";
$LANG["Composite_help_4"] = "Vise en verdi fra rad 6: <b>( \$ ROW6)</b>";
$LANG["Composite_help_5"] = "Forutsatt rad 1 og rad 2 inneholder tilfeldige tall, er følgende eksempler på noen enkle matematiske:";
$LANG["Composite_help_6"] = "Hvis rad 1 inneholder tallet 5, vises  &quot;N / A &quot;, ellers bare vise nummeret.";
$LANG["Composite_help_7"] = "Se <a href=\"http://www.smarty.net/\">Smarty nettsiden</a> for mer informasjon om syntaksen.";
$LANG["Composite_multiplication"] = "multiplikasjon";
$LANG["Composite_na"] = "N / A";
$LANG["Composite_name"] = "Composite";
$LANG["Composite_subtraction"] = "subtraksjon";
$LANG["Constant_help_1"] = "Denne datatypen kan du generere en kolonne med data som har gjentatte verdier fra rad til rad. Her er et par eksempler for å gi deg en idé om hvordan dette fungerer.";
$LANG["Constant_help_2"] = "Hvis du vil gi verdien  &quot;1 &quot; for hver rad, kan du skrive inn  &quot;1 &quot; i Verdi (e) feltet og helst verdi (&gt; 0) i Loop Count feltet.";
$LANG["Constant_help_3"] = "Hvis du vil ha 100 rader av strengen  &quot;Male &quot; etterfulgt av 100 rader av strengen  &quot;Female &quot;, og gjenta, kan du skrive inn  &quot;100 &quot; i Loop Greven feltet og  &quot;Male | Kvinne  &quot;i Verdi (e)-feltet.";
$LANG["Constant_help_4"] = "Hvis du ønsker det 5 rader med 1 til 10, skriv inn  &quot;5 &quot; for Loop Count feltet, og  &quot;1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 &quot; i Verdi (er)-feltet.";
$LANG["Constant_help_5"] = "Prøv fiksing og triksing rundt med den. Du får ideen.";
$LANG["Constant_incomplete_fields"] = "The Constant datatypen må ha konstantene som skal legges inn i tekstfeltet. Fiks følgende rader:";
$LANG["Constant_loop_count"] = "Loop teller:";
$LANG["Constant_name"] = "Konstant";
$LANG["Constant_values"] = "Verdi (er):";
$LANG["Country_limit_results"] = "Begrens landene til de valgt ovenfor";
$LANG["Country_name"] = "Land";
$LANG["Date_char"] = "Char";
$LANG["Date_day"] = "Dag";
$LANG["Date_description"] = "Beskrivelse";
$LANG["Date_example"] = "Eksempel";
$LANG["Date_format_code"] = "Format kode:";
$LANG["Date_from"] = "Fra:";
$LANG["Date_help_D"] = "En tekstlig representasjon av en dag, tre bokstaver";
$LANG["Date_help_D_example"] = "Man gjennom Søn";
$LANG["Date_help_F"] = "En full tekstlig representasjon av en måned, slik som i januar eller mars";
$LANG["Date_help_F_example"] = "Januar til desember";
$LANG["Date_help_L"] = "Enten det er et skuddår";
$LANG["Date_help_L_example"] = "1 hvis det er et skuddår, 0 ellers.";
$LANG["Date_help_M"] = "En kort tekstlig representasjon av en måned, tre bokstaver";
$LANG["Date_help_M_example"] = "Jan gjennom desember";
$LANG["Date_help_S"] = "Engelske ordenstall suffiks for dagen i måneden, 2 tegn st, nd, rd eller th. Fungerer godt med j";
$LANG["Date_help_S_example"] = "Søndag til lørdag";
$LANG["Date_help_W"] = "ISO-8601 ukenummer i år, uker begynte på en mandag";
$LANG["Date_help_W_example"] = "42 (den 42. uken i året)";
$LANG["Date_help_Y"] = "En full numerisk representasjon av et år, 4 siffer";
$LANG["Date_help_Y_example"] = "1999 eller 2003";
$LANG["Date_help_d"] = "Dag i måneden, to siffer med ledende nuller";
$LANG["Date_help_d_example"] = "01-31";
$LANG["Date_help_intro"] = "Denne datatypen genererer tilfeldig en dato mellom datoene spesifisert, og åpner for unike formatering av resultatet. Se tabellen nedenfor for en liste over levedyktig formatering regler (disse er cribbed fra standard PHP date () formateringsalternativer). Ta en titt på eksempelet dropdown å velge fra eksisterende formateringsalternativer.";
$LANG["Date_help_j"] = "Dag i måneden uten ledende nuller";
$LANG["Date_help_j_example"] = "1-31";
$LANG["Date_help_l"] = "En full tekstlig representasjon av dagen i uken";
$LANG["Date_help_l_example"] = "Søndag til lørdag";
$LANG["Date_help_m"] = "Numerisk representasjon av en måned, med ledende nuller";
$LANG["Date_help_m_example"] = "01 til 12";
$LANG["Date_help_n"] = "Numerisk representasjon av en måned, uten ledende nuller";
$LANG["Date_help_n_example"] = "1 til 12";
$LANG["Date_help_t"] = "Antall dager i en gitt måned";
$LANG["Date_help_t_example"] = "28 til 31.";
$LANG["Date_help_w"] = "Numerisk representasjon av dagen i uken";
$LANG["Date_help_w_example"] = "0 (for søndag) til 6 (for lørdag)";
$LANG["Date_help_y"] = "Et tosifret representasjon av et år";
$LANG["Date_help_y_example"] = "99 eller 03";
$LANG["Date_help_z"] = "Den dagen i året (fra 0)";
$LANG["Date_help_z_example"] = "0 til 365";
$LANG["Date_incomplete_fields"] = "Datoer må ha formatet inn i Options tekstfeltet. Fiks følgende rader:";
$LANG["Date_month"] = "Måned";
$LANG["Date_name"] = "Dato";
$LANG["Date_to"] = "Slik:";
$LANG["Date_week"] = "Uke";
$LANG["Date_year"] = "År";
$LANG["Emails_name"] = "E-post";
$LANG["GUID_help"] = "Genererer et unikt, tilfeldig GUID (globalt unik identifikator) i skjemaet: XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX, der X er alle heksadesimal siffer).";
$LANG["GUID_name"] = "GUID";
$LANG["LatLng_help"] = "Denne datatypen genererer tilfeldige, bredde-og / eller lengdegrad. Hvis begge er valgt, viser det både skilt med komma.";
$LANG["LatLng_latitude"] = "Latitude";
$LANG["LatLng_longitude"] = "Lengdegrad";
$LANG["LatLng_name"] = "Breddegrad og lengdegrad";
$LANG["List_at_most"] = "Ved de fleste";
$LANG["List_colours"] = "rød | oransje | gule | grønn | blå | indigo | fiolett";
$LANG["List_companies"] = "Microsoft | Macromedia | Google | Yahoo | Lycos | Altavista | Chami | Adobe | Borland | Lavasoft | Cakewalk | Sibelius | Finale | Apple Systems";
$LANG["List_company_names"] = "Regnskap | Annonsering | Asset Management | Kundeservice Relations | Kundeservice | Økonomi | Human Resources | Juridisk avdeling | Media Relations | Lønn | PR | Kvalitetssikring | Salg og markedsføring | Forskning og Utvikling | Teknisk Support";
$LANG["List_exactly"] = "Nøyaktig";
$LANG["List_example_1"] = "Odd Nums under 50";
$LANG["List_example_2"] = "Selv Nums under 50";
$LANG["List_example_3"] = "One-Ten";
$LANG["List_example_4"] = "Prime Nums under 100";
$LANG["List_example_5"] = "Farger";
$LANG["List_example_6"] = "Ekteskapelig status";
$LANG["List_example_7"] = "Tittel";
$LANG["List_example_8"] = "Avdeling Navn";
$LANG["List_example_9"] = "Firmanavn";
$LANG["List_help"] = "Skriv en liste over elementer, adskilt med en pipe | karakter. Deretter velger du om du vil <b>Akkurat</b>X antall elementer, eller <b>Ved de fleste</b>X elementer fra listen. Flere elementer er tilbake i en kommaseparert liste i resultatene.";
$LANG["List_name"] = "Egendefinert liste";
$LANG["List_one_to_ten"] = "en | to | tre | fire | fem | seks | syv | åtte | ni | ti";
$LANG["List_prefix"] = "Dr. | Mr. | Fru | Ms |";
$LANG["List_relationship_states"] = "Enkeltrom | Gift | Skilt | Common-Law";
$LANG["List_separated_by_pipe"] = "Skriv inn verdier atskilt med |";
$LANG["Names_example_FemaleName"] = "Jane (Kvinne navn)";
$LANG["Names_example_FemaleName_Surname"] = "Jane Smith";
$LANG["Names_example_MaleName"] = "John (Male navn)";
$LANG["Names_example_MaleName_Surname"] = "John Smith";
$LANG["Names_example_Name"] = "Alex (alle kjønn)";
$LANG["Names_example_Name4"] = "Jenny, Toby, Ben, Peter";
$LANG["Names_example_Name_Initial_Surname"] = "Alex J. Smith";
$LANG["Names_example_Name_Surname"] = "Alex Smith";
$LANG["Names_example_Surname_Name_Initial"] = "Smith, John P.";
$LANG["Names_example_fullnames"] = "Alex Smith eller Alex J. Smith";
$LANG["Names_example_surname"] = "Smith (etternavn)";
$LANG["Names_help_intro"] = "Denne datatypen genererer tilfeldig menneskelig navn (hovedsakelig vestlige) i henhold til det formatet du angir. Du kan angi flere formater ved å skille dem med pipe (|) karakter. Følgende strenger vil bli konvertert til tilfeldig navn tilsvarende:";
$LANG["Names_incomplete_fields"] = "Navn datatypen må ha formatet inn i Options tekstfeltet. Fiks følgende rader:";
$LANG["Names_name"] = "Navn";
$LANG["Names_type_FemaleName"] = "En kvinnelig fornavn.";
$LANG["Names_type_Initial"] = "En stor bokstav, AZ.";
$LANG["Names_type_MaleName"] = "En mannlig fornavn.";
$LANG["Names_type_Name"] = "Et fornavn, mann eller kvinne.";
$LANG["Names_type_Surname"] = "En tilfeldig etternavn.";
$LANG["NumberRange_and"] = "og";
$LANG["NumberRange_between"] = "Mellom";
$LANG["NumberRange_help"] = "Dette genererer tilfeldig et tall mellom verdiene du angir. Begge feltene kan du angi negative tall.";
$LANG["NumberRange_name"] = "Number Range";
$LANG["Phone_different_formats"] = "Ulike formater";
$LANG["Phone_example_1"] = "Canada (1)";
$LANG["Phone_example_2"] = "Canada (2)";
$LANG["Phone_help_text1"] = "Uansett hva teksten du skriver inn i alternativene tekstfeltet skal brukes til å generere telefonnummer. Capital <b>X</b>&#39;s vil bli konvertert til et tilfeldig tall mellom 1 og 9, nedre-saken <b>x </b>&#39; s vil bli konvertert til et tilfeldig tall mellom 0 og 9.";
$LANG["Phone_help_text2"] = "Velg en av verdiene i eksemplet rullegardinlisten for noen ideer. Husk: alt annet enn <b>X</b>og <b>x</b>tegn er igjen uomvendte.";
$LANG["Phone_help_text3"] = "Som med mange av de andre datatyper for å generere telefonnumre i flere format skille dem med en pipe | karakter.";
$LANG["Phone_incomplete_fields"] = "Telefonen datatypen må ha formatet inn i Options tekstfeltet. Fiks følgende rader:";
$LANG["Phone_name"] = "Telefon / faks";
$LANG["Phone_uk"] = "UK";
$LANG["PostalZip_help_text"] = "Genererer en tilfeldig adresse eller postnummer. For større kontroll, bruker alfa-numeriske data type alternativet.";
$LANG["PostalZip_name"] = "Postal / Zip";
$LANG["StateProvince_help_text"] = "Utvikler tilfeldig kanadiske provinser, delstater, territorier eller fylker, basert på alternativene du velger. Den <b>Fullt navn</b>og <b>Forkortelse</b>sub-valg avgjøre om resultatet skal inneholde fullstendige strengen (f.eks &quot;British Columbia&quot;) eller forkortelsen (for eksempel &quot;BC&quot;). For UK fylker, er forkortelsen standard 3-tegns kode Chapman.";
$LANG["StateProvince_name"] = "Stat / provins / fylke";
$LANG["StreetAddress_ap_num"] = "Ap #";
$LANG["StreetAddress_name"] = "Gateadresse";
$LANG["StreetAddress_po_box"] = "PO Box";
$LANG["StreetAddress_street_types"] = "St., St., Street, Road, Rd., Rd., Ave, Av., Avenue";
$LANG["TextFixed_generate"] = "Generer";
$LANG["TextFixed_help"] = "Dette alternativet genererer et fast antall tilfeldige ord, trakk seg fra vanlige &lt;a href=&quot;http://en.wikipedia.org/wiki/Lorem_ipsum&quot; target=&quot;_blank&quot;&gt; Lorem Ipsum &lt;/ a&gt; latinsk tekst.";
$LANG["TextFixed_name"] = "Faste antall ord";
$LANG["TextFixed_words"] = "ord";
$LANG["TextRandom_name"] = "Tilfeldige antall ord";
$LANG["Tree_auto_increment_row_num"] = "Auto-økning rad nummer:";
$LANG["Tree_help_1"] = "Denne datatypen kan du generere trelignende data hvor hver rad er et barn av en annen rad - med unntak av den aller første raden, som er stammen på treet. Denne datatypen må brukes sammen med Auto-Øk datatype: som sikrer at hver rad har en unik numerisk verdi, som denne datatypen bruker referanse til overordnede linjene.";
$LANG["Tree_help_2"] = "Alternativene kan du angi hvilke skjemafelt er riktig automatisk øke feltet og det maksimale antall barn en node kan ha.";
$LANG["Tree_invalid_parent"] = "[Ugyldig forelder]";
$LANG["Tree_max_num_sibling_nodes"] = "Maks antall søsken noder:";
$LANG["Tree_name"] = "Tree (forelder rad ID)";
$LANG["about"] = "Om";
$LANG["accounts"] = "Kontoer";
$LANG["add"] = "Legg til";
$LANG["add_default_auto_increment_col"] = "Legg til standard auto-tilvekst kolonne";
$LANG["column_title"] = "Kolonne Tittel";
$LANG["confirm_delete_form"] = "Er du sikker på at du vil slette denne formen?";
$LANG["confirm_empty_form"] = "Er du sikker på at du vil tømme dette skjemaet?";
$LANG["countries"] = "Land";
$LANG["country_australia"] = "Australia";
$LANG["country_belgium"] = "Belgia";
$LANG["country_canada"] = "Canada";
$LANG["country_netherlands"] = "Nederland";
$LANG["country_uk"] = "Storbritannia";
$LANG["country_us"] = "USA";
$LANG["data_type"] = "Datatype";
$LANG["db_table_name"] = "Database tabellnavn";
$LANG["db_type"] = "Database Type";
$LANG["default_save_form_empty_str"] = "Skriv inn skjema navn her";
$LANG["del"] = "Del";
$LANG["del_uc"] = "DEL";
$LANG["delimiter_chars"] = "Delimiter Character (s)";
$LANG["donate"] = "Donere!";
$LANG["empty_form"] = "Tøm skjema";
$LANG["enclose_table_backquotes"] = "Legg ved tabell og feltnavn med backquotes";
$LANG["eol_char"] = "Slutt på linje karakter";
$LANG["examples"] = "Eksempler";
$LANG["fatal_error"] = "En fatal feil oppsto.";
$LANG["form_deleted"] = "Skjemaet er slettet.";
$LANG["form_exists_overwrite_confirmation"] = "Dette skjemaet finnes allerede. Vil du overskrive den?";
$LANG["form_not_deleted"] = "Beklager, vi kunne ikke slette dette skjemaet. Re-logg inn og prøv igjen.";
$LANG["form_saved"] = "Din skjemaet er lagret.";
$LANG["forums"] = "Forum";
$LANG["generate"] = "Generer";
$LANG["generator"] = "Generator";
$LANG["help"] = "Hjelp";
$LANG["hide_error"] = "Skjul feil";
$LANG["human_data"] = "Human Data";
$LANG["include_create_table_query"] = "Ta med CREATE TABLE spørring";
$LANG["include_drop_table_query"] = "Inkluder DROP TABLE spørring";
$LANG["invalid_custom_xml"] = "Det er et problem med den egendefinerte XML markup du har angitt. Vennligst se brukerdokumentasjonen for mer informasjon.";
$LANG["invalid_node_names"] = "XML node navn kan bare inneholde alfanumeriske tegn og må begynne med en bokstav. Fiks følgende rader:";
$LANG["invalid_num_results"] = "Vennligst skriv inn et gyldig antall resultater.";
$LANG["invalid_table_names"] = "Databasekolonnen kan kun alfanumeriske tegn og må begynne med en bokstav. Fiks følgende rader:";
$LANG["invalid_xml_record_node_name"] = "Vennligst skriv inn en gyldig XML-posten node verdi.";
$LANG["invalid_xml_root_node_name"] = "Vennligst skriv inn en gyldig XML-rot noden verdi.";
$LANG["load_uc"] = "LOAD";
$LANG["misc_options"] = "Ymse val";
$LANG["missing_node_names"] = "Følgende rader har mangler node navn:";
$LANG["missing_table_names"] = "Følgende rader har mangler tabell kolonne navn:";
$LANG["missing_xml_record_node_name"] = "Angi en verdi for XML-posten noden.";
$LANG["missing_xml_root_node_name"] = "Angi en verdi for XML rot noden.";
$LANG["no_csv_delimiter"] = "Vennligst skriv inn CSV skilletegn.";
$LANG["no_data"] = "Oops, ingenting å generere! Skriv inn noen data som skal genereres.";
$LANG["no_examples_available"] = "Ingen eksempler er tilgjengelig.";
$LANG["no_form_name"] = "Vennligst skriv inn et skjema navn.";
$LANG["no_js"] = "<b>Feil:</b>JavaScript ikke er aktivert.";
$LANG["no_js_blurb"] = "Data-skriptet avhenger svært mye av javascript. Du må aktivere den i nettleseren din deretter oppdatere denne siden.";
$LANG["no_num_rows"] = "Fyll inn antallet rader som skal legge til.";
$LANG["no_options_available"] = "Ingen alternativer tilgjengelig.";
$LANG["node_name"] = "Nodenavn";
$LANG["none"] = "Ingen";
$LANG["num_results"] = "Num Resultater";
$LANG["ok"] = "OK";
$LANG["options"] = "Valg";
$LANG["order"] = "Bestill";
$LANG["other"] = "Andre";
$LANG["please_fix_errors"] = "Fiks følgende feil og sende på nytt:";
$LANG["please_select"] = "Vennligst Select";
$LANG["primary_key"] = "Primærnøkkel";
$LANG["record_node_name"] = "Vanlig nodenavn";
$LANG["result_type"] = "Resultatet Type";
$LANG["root_node_name"] = "Root nodenavn";
$LANG["row_sp"] = "Row (s)";
$LANG["save_uc"] = "SAVE";
$LANG["script_thinking"] = "Oops, holder på i ett sekund. Skriptet tenker.";
$LANG["see_help_popup"] = "Se hjelp popup.";
$LANG["select_language"] = "Velg språk";
$LANG["statement_type"] = "Uttalelse Type";
$LANG["table_column"] = "Tabell kolonne";
$LANG["text"] = "Tekst";
$LANG["use_custom_xml_format"] = "Bruk egendefinerte XML-format";
$LANG["website"] = "Nettsted";

?>