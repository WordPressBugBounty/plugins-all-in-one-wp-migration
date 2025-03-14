<?php
/**
 * Copyright (C) 2014-2025 ServMask Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Attribution: This code is part of the All-in-One WP Migration plugin, developed by
 *
 * ███████╗███████╗██████╗ ██╗   ██╗███╗   ███╗ █████╗ ███████╗██╗  ██╗
 * ██╔════╝██╔════╝██╔══██╗██║   ██║████╗ ████║██╔══██╗██╔════╝██║ ██╔╝
 * ███████╗█████╗  ██████╔╝██║   ██║██╔████╔██║███████║███████╗█████╔╝
 * ╚════██║██╔══╝  ██╔══██╗╚██╗ ██╔╝██║╚██╔╝██║██╔══██║╚════██║██╔═██╗
 * ███████║███████╗██║  ██║ ╚████╔╝ ██║ ╚═╝ ██║██║  ██║███████║██║  ██╗
 * ╚══════╝╚══════╝╚═╝  ╚═╝  ╚═══╝  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Kangaroos cannot jump here' );
}
?>

<div class="ai1wm-feedback">
	<ul class="ai1wm-feedback-types">
		<li>
			<input type="radio" class="ai1wm-flat-radio-button ai1wm-feedback-type" id="ai1wm-feedback-type-1" name="ai1wm_feedback_type" value="suggestions" />
			<a id="ai1wm-feedback-type-link-1" href="https://feedback.wp-migration.com" target="_blank">
				<i></i>
				<span>
					<?php _e( 'I have an idea', AI1WM_PLUGIN_NAME ); ?>
					<svg style="width: 14px; position: relative; top: 3px; left: 3px;" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
				</span>
			</a>
		</li>
		<li>
			<input type="radio" class="ai1wm-flat-radio-button ai1wm-feedback-type" id="ai1wm-feedback-type-2" name="ai1wm_feedback_type" value="help-needed" />
			<label for="ai1wm-feedback-type-2">
				<i></i>
				<span><?php _e( 'I need help', AI1WM_PLUGIN_NAME ); ?></span>
			</label>
		</li>
	</ul>

	<div class="ai1wm-feedback-form">
		<div class="ai1wm-field">
			<input placeholder="<?php _e( 'Email address', AI1WM_PLUGIN_NAME ); ?>" type="text" id="ai1wm-feedback-email" class="ai1wm-feedback-email" />
		</div>
		<div class="ai1wm-field">
			<textarea rows="3" id="ai1wm-feedback-message" class="ai1wm-feedback-message" placeholder="<?php _e( 'Describe your issue or feedback...', AI1WM_PLUGIN_NAME ); ?>"></textarea>
		</div>
		<div class="ai1wm-field ai1wm-feedback-terms-segment">
			<label for="ai1wm-feedback-terms">
				<input type="checkbox" class="ai1wm-feedback-terms" id="ai1wm-feedback-terms" />
				<?php _e( 'I agree to let All-in-One WP Migration use my <strong>email</strong> to respond to my request. <a href="https://www.iubenda.com/privacy-policy/946881" target="_blank">Privacy policy</a>', AI1WM_PLUGIN_NAME ); ?>
			</label>
		</div>
		<div class="ai1wm-field">
			<div class="ai1wm-buttons">
				<a class="ai1wm-feedback-cancel" id="ai1wm-feedback-cancel" href="#"><?php _e( 'Cancel', AI1WM_PLUGIN_NAME ); ?></a>
				<button type="submit" id="ai1wm-feedback-submit" class="ai1wm-button-blue ai1wm-form-submit">
					<i class="ai1wm-icon-paperplane"></i>
					<?php _e( 'Send', AI1WM_PLUGIN_NAME ); ?>
				</button>
				<span class="spinner"></span>
				<div class="ai1wm-clear"></div>
			</div>
		</div>
	</div>
</div>
