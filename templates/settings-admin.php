<?php

/**
 * ownCloud - Music app
 *
 * @author Morris Jobke
 * @copyright 2013 Morris Jobke <morris.jobke@gmail.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * TODO: Proper extractor
 *
 * Translation note: Keep in mind to update the fake-template.php with the string which
 * has to be translated, because just that file is scanned by the extractor
 */

?>

<fieldset class="personalblock" id="music-admin">
	<h2><?php p($l->t('Music')); ?></h2>
	<div>
		<input type="checkbox" id="music-enable-ampache"
			<?php if($_['ampacheEnabled']){ ?>
				checked="checked"
			<?php } ?> />
		<label for="music-enable-ampache"><?php p($l->t('Enable Ampache support')) ?></label><br />
		<em><?php p($l->t('This weakens your ownCloud instance because it generates unsalted hashes
		of the user passwords. (Just for users who have enabled this feature.)')); ?></em>
	</div>
</fieldset>
