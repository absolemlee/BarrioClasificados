<?php
/*
 *      OSCLass – software for creating and publishing online classified
 *                           advertising platforms
 *
 *                        Copyright (C) 2010 OSCLASS
 *
 *       This program is free software: you can redistribute it and/or
 *     modify it under the terms of the GNU Affero General Public License
 *     as published by the Free Software Foundation, either version 3 of
 *            the License, or (at your option) any later version.
 *
 *     This program is distributed in the hope that it will be useful, but
 *         WITHOUT ANY WARRANTY; without even the implied warranty of
 *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *             GNU Affero General Public License for more details.
 *
 *      You should have received a copy of the GNU Affero General Public
 * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<h2><?php echo __('Items from ').$user['s_name']; ?></h2>

<?php if(count($items) == 0): ?>
	<h3><?php _e('No items.'); ?></h3>
<?php else: ?>
<?php foreach($items as $i) { ?>
	<div class="userItem" >
		<div><a href="<?php osc_createItemURL($i, true); ?>"><?php echo $i['s_title']; ?></a></div>

		<div class="userItemData" >
		<?php _e('Publication date'); ?>: <?php echo osc_formatDate($i); ?><br />
		<?php _e('Price'); ?>: <?php echo osc_formatPrice($i); ?>
		</div>

	</div>
	<br />
<?php }; ?>
<?php endif; ?>