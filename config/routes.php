<?php
/*  Riichi mahjong stat GUI
 *  Copyright (C) 2016  o.klimenko aka ctizen
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    '/'               => 'Mainpage',
    '/login/'         => 'AdminLogin',
    '/last/.*'        => 'LastGames',
    '/add/'           => 'AddGame',
    '/addonline/'     => 'AddOnlineGame',
    '/graphs/.*'      => 'Graphs',
    '/reg/'           => 'PlayerRegistration',
    '/enroll/'        => 'PlayerEnrollment',
    '/stat/.*'        => 'RatingTable',
    '/timer/.*'       => 'Timer',
    '/sortition/'     => 'Sortition',
    '/sortition/(?<seed>[0-9a-f]+)/' => 'Sortition',

    '/tourn/'         => 'StartTournament',
    '/tourn/(?<action>start)/'   => 'StartTournament',
    '/tourn/(?<action>dropLastRound)/(?<hash>[0-9a-f]+)/'   => 'StartTournament',

    '/penalties/'     => 'Penalties',
    '/penalties/(?<action>apply)/' => 'Penalties',

    '/favicon.ico'    => 'Mainpage' // костылёк ^_^
];
