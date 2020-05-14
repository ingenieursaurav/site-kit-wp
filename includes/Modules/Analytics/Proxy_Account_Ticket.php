<?php
/**
 * Class Google\Site_Kit\Modules\Analytics\Proxy_AccountTicket
 *
 * @package   Google\Site_Kit\Modules\Analytics
 * @copyright 2020 Google LLC
 * @license   https://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link      https://sitekit.withgoogle.com
 */

namespace Google\Site_Kit\Modules\Analytics;

use Google\Site_Kit_Dependencies\Google_Service_Analytics_AccountTicket;

/**
 * Class for the Analytics provisioning Account Ticket object.
 *
 * @since n.e.x.t
 * @access private
 * @ignore
 */
class Proxy_AccountTicket extends Google_Service_Analytics_AccountTicket {

	/**
	 * The site ID.
	 *
	 * @since n.e.x.t
	 * @var String
	 */
	public $site_id = '';

	/**
	 * The site secret.
	 *
	 * @since n.e.x.t
	 * @var String
	 */
	public $site_secret = '';

	/**
	 * Gets the site ID.
	 *
	 * @since n.e.x.t
	 */
	public function getSiteId() {
		return $this->site_id;
	}

	/**
	 * Sets the site ID.
	 *
	 * @since n.e.x.t
	 *
	 * @param string $id The site id.
	 */
	public function setSiteId( $id ) {
		$this->site_id = $id;
	}

	/**
	 * Gets the site secret.
	 *
	 * @since n.e.x.t
	 */
	public function getSiteSecret() {
		return $this->site_secret;
	}

	/**
	 * Sets the site secret.
	 *
	 * @since n.e.x.t
	 *
	 * @param string $secret The site secret.
	 */
	public function setSiteSecret( $secret ) {
		$this->site_secret = $secret;
	}
}
