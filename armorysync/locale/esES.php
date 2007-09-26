﻿<?php
/**
 * WoWRoster.net WoWRoster
 *
 * spanish localisaton - thx to Subxero
 *
 * LICENSE: Licensed under the Creative Commons
 *          "Attribution-NonCommercial-ShareAlike 2.5" license
 *
 * @copyright  2002-2007 WoWRoster.net
 * @license    http://creativecommons.org/licenses/by-nc-sa/2.5   Creative Commons "Attribution-NonCommercial-ShareAlike 2.5"
 * @version    SVN: $Id$
 * @link       http://www.wowroster.net
 * @package    ArmorySync
*/

// -[ esES Localization ]-

// Button names
$lang['async_button']			= 'ArmorySync Personaje|Sincroniza el personaje con la Armería de Blizzard';
$lang['async_button2']			= 'ArmorySync Miembros|Sincroniza el listado de miembros con la Armería de Blizzard';
$lang['async_button3']			= 'ArmorySync nueva Hermandad|Añade una nueva Hermandad y sincroniza<br>la lista de miembros con la Armería de Blizzard';

// Config strings
$lang['admin']['armorysync_conf']			= 'Configuración ArmorySync';
$lang['admin']['armorysync_host']			= 'Servidor|Servidor con el que sincronizar.';
$lang['admin']['armorysync_minlevel']		= 'Nivel Minimo|Nivel minimo de los personajes para sincronizar.';
$lang['admin']['armorysync_synchcutofftime']	= 'Tiempo de Sync minimo|Tiempo en dias.<br>Todos los personajes que no se hayan actualizado en los ultimos (x) dias seran sincronizados.';
$lang['admin']['armorysync_reloadwaittime']	= 'Tiempo de espera recarga|Tiempo en segundos.<br>Tiempo que espera antes de empezar la siguiente sincronización.';
$lang['admin']['armorysync_fetch_timeout'] = 'Tiempo de espera agotado para la Armory|Tiempo en segundos que se espera para recibir un solo archivo XML antes de ser cancelado.';
$lang['admin']['armorysync_skip_start'] = 'Saltar pagina inicial|Saltar pagina inicial al actualizar con ArmorySync.';
$lang['admin']['armorysync_status_hide'] = 'Hide status windows initialy|Hide the status windows of ArmorySync on the first load.';
$lang['admin']['armorysync_char_update_access'] = 'Nivel de acceso Personajes|Quien puede hacer actualizaciones de personajes';
$lang['admin']['armorysync_guild_update_access'] = 'Nivel de acceso Hermandad|Quien puede hacer actualizaciones de hermandades';
$lang['admin']['armorysync_guild_memberlist_update_access'] = 'Nivel de acceso Listado de miembros|Quien puede hacer actualizaciones del listado de miembros';
$lang['admin']['armorysync_realm_update_access'] = 'Nivel de acceso Reino|Quien puede hacer actualizaciones de reinos';
$lang['admin']['armorysync_guild_add_access'] = 'Nivel de acceso añadir Hermandad|Quien puede añadir nuevas hermandades';
//$lang['admin']['armorysync_usecurl']		= 'Use Curl|Auf false setzen wenn du die original FileSocket function benutzen möchtest.';
//$lang['admin']['armorysync_debuglevel']		= 'Debug level';
//$lang['admin']['armorysync_updateroster']	= "Update Roster|Das Roster aktualisieren oder nicht.<br>Sinnvoll fürs Debuggen.";
//$lang['admin']['armorysync_ismysqllower411']	= "MySQL < 4.1.1|Auf True setzen wenn deine MySQL Version kleiner als 4.1.1 ist.";
$lang['admin']['armorysync_protectedtitle']	= "Rango Hermandad protegidos|Los personajes con este rango estan protegidos<br>no podran ser borrados por una actualización del listado de miembros desde la armería.<br>Amenudo el problema suele ocurrir con los personajes banqueros.<br>Es posible añadir mas de uno separandolo con \",\". Ejem. Banco,Almacen";


$lang['bindings']['bind_on_pickup'] = "Se liga al recogerlo";
$lang['bindings']['bind_on_equip'] = "Se liga al equiparlo";
$lang['bindings']['bind'] = "Ligado";

// Addon strings
$lang['RepStanding']['Exalted'] = 'Exaltado';
$lang['RepStanding']['Revered'] = 'Venerado';
$lang['RepStanding']['Honored'] = 'Honorable';
$lang['RepStanding']['Friendly'] = 'Amistoso';
$lang['RepStanding']['Neutral'] = 'Neutral';
$lang['RepStanding']['Unfriendly'] = 'Enemigo';
$lang['RepStanding']['Hostile'] = 'Hostil';
$lang['RepStanding']['Hated'] = 'Odiado';

$lang['Skills']['Class Skills'] = "Habilidades de clase";
$lang['Skills']['Professions'] = "Profesiones";
$lang['Skills']['Secondary Skills'] = "Habilidades secundarias";
$lang['Skills']['Weapon Skills'] = "Armas disponibles";
$lang['Skills']['Armor Proficiencies'] = "Armaduras disponibles";
$lang['Skills']['Languages'] = "Lenguas";


$lang['Classes']['Druid'] = 'Druida';
$lang['Classes']['Hunter'] = 'Cazador';
$lang['Classes']['Mage'] = 'Mago';
$lang['Classes']['Paladin'] = 'Paladín';
$lang['Classes']['Priest'] = 'Sacerdote';
$lang['Classes']['Rogue'] = 'Pícaro';
$lang['Classes']['Shaman'] = 'Shamán';
$lang['Classes']['Warlock'] = 'Brujo';
$lang['Classes']['Warrior'] = 'Guerrero';

$lang['Talenttrees']['Druid']['Balance'] = "Equilibrio";
$lang['Talenttrees']['Druid']['Feral Combat'] = "Combate feral";
$lang['Talenttrees']['Druid']['Restoration'] = "Restauración";
$lang['Talenttrees']['Hunter']['Beast Mastery'] = "Dominio de bestias";
$lang['Talenttrees']['Hunter']['Marksmanship'] = "Puntería";
$lang['Talenttrees']['Hunter']['Survival'] = "Supervivencia";
$lang['Talenttrees']['Mage']['Arcane'] = "Arcano";
$lang['Talenttrees']['Mage']['Fire'] = "Fuego";
$lang['Talenttrees']['Mage']['Frost'] = "Escarcha";
$lang['Talenttrees']['Paladin']['Holy'] = "Sagrado";
$lang['Talenttrees']['Paladin']['Protection'] = "Protección";
$lang['Talenttrees']['Paladin']['Retribution'] = "Represión";
$lang['Talenttrees']['Priest']['Discipline'] = "Disciplina";
$lang['Talenttrees']['Priest']['Holy'] = "Sagrado";
$lang['Talenttrees']['Priest']['Shadow'] = "Sombras";
$lang['Talenttrees']['Rogue']['Assassination'] = "Asesinato";
$lang['Talenttrees']['Rogue']['Combat'] = "Combate";
$lang['Talenttrees']['Rogue']['Subtlety'] = "Sutileza";
$lang['Talenttrees']['Shaman']['Elemental'] = "Elemental";
$lang['Talenttrees']['Shaman']['Enhancement'] = "Mejora";
$lang['Talenttrees']['Shaman']['Restoration'] = "Restauración";
$lang['Talenttrees']['Warlock']['Affliction'] = "Aflicción";
$lang['Talenttrees']['Warlock']['Demonology'] = "Demonología";
$lang['Talenttrees']['Warlock']['Destruction'] = "Destrucción";
$lang['Talenttrees']['Warrior']['Arms'] = "Armas";
$lang['Talenttrees']['Warrior']['Fury'] = "Furia";
$lang['Talenttrees']['Warrior']['Protection'] = "Protección";

$lang['misc']['Rank'] = "Rango";

$lang['guild_short'] = "Herman.";
$lang['character_short'] = "Pers.";
$lang['skill_short'] = "Habil.";
$lang['reputation_short'] = "Repu.";
$lang['equipment_short'] = "Equipo";
$lang['talents_short'] = "Talen.";

$lang['started'] = "empezo";
$lang['finished'] = "acabo";

$lang['armorySyncTitle_Char'] = "ArmorySync para Personajes";
$lang['armorySyncTitle_Guild'] = "ArmorySync para Hermandades";
$lang['armorySyncTitle_Guildmembers'] = "ArmorySync para listado de miembros de una Hermandad";
$lang['armorySyncTitle_Realm'] = "ArmorySync para Reinos";

$lang['next_to_update'] = "Siguiente Actualización: ";
$lang['nothing_to_do'] = "Nada para hacer por el momento";

$lang['error'] = "Error";
$lang['error_no_character'] = "Sin referencias del personaje.";
$lang['error_no_guild'] = "Sin referencias de la hermandad.";
$lang['error_no_realm'] = "Sin referencias del reino.";
$lang['error_use_menu'] = "Use el menu para sincronizar.";

$lang['error_guild_insert'] = "Error creando la hermandad.";
$lang['error_uploadrule_insert'] = "Error creando las reglas de subida.";
$lang['error_guild_notexist'] = "La hermandad facilitada no existe en la Armería.";
$lang['error_missing_params'] = "Faltan parametros. Por favor vuelve a intentarlo";
$lang['error_wrong_region'] = "Region incorrecta. Solo EU y US son regiones validas.";
$lang['armorysync_guildadd'] = "Añadiendo Hermandad y sincronizando<br>listado de miembros con la Armería.";
$lang['armorysync_guildadd_help'] = "Información";
$lang['armorysync_guildadd_helpText'] = "Escribe la hermandad y el servidor exactamente como se muestran en la Armería de Blizzard.<br>Region es EU pra los europeos y US para las hermandades americanas. En primer lugar<br>se comprobara la existencia de la hermandad. Acto seguido se empezara con la<br>sincronización del listado de miembros.";

$lang['guildleader'] = "Maestro de la hermandad";

$lang['rage'] = "Ira";
$lang['energy'] = "Energía";
$lang['focus'] = "Focus";

$lang['armorysync_credits'] = 'Gracias a <a target="_blank" href="http://www.papy-team.fr">tuigii</a>, <a target="_blank" href="http://xent.homeip.net">zanix</a>, <a target="_blank" href="http://www.wowroster.net/Your_Account/profile=1126.html">ds</a> y <a target="_blank" href="http://www.wowroster.net/Your_Account/profile=711.html">Subxero</a> por probarlo, traducirlo y ayudar.<br>Especial gracias a <a target="_blank" href="http://www.wowroster.net/Your_Account/profile=13101.html">kristoff22</a> por el codigo original del ArmorySync y a <a target="_blank" href="http://www.iceguild.org.uk/forum">Pugro</a> por sus cambios en el.';

$lang['start'] = "Empezar";
$lang['start_message'] = "Estas apunto de empezar a usar ArmorySync con %s %s.<br><br>Con esto toda la información de %s sera sobre escrita<br>con los detalles de la Armería de Blizzard. Solo se podra deshacer<br>subiendo de nuevo un CharacterProfiler.lua nuevo.<br><br>Estas seguro de querer empezar el proceso";

$lang['start_message_the_char'] = "el personaje";
$lang['start_message_this_char'] = "este personaje";
$lang['start_message_the_guild'] = "la hermandad";
$lang['start_message_this_guild'] = "todos los personajes de esta hermandad";
$lang['start_message_the_realm'] = "el reino";
$lang['start_message_this_realm'] = "todos los personajes de este reino";

