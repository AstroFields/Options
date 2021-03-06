<?php

namespace WCM\AstroFields\Options\Templates;

use WCM\AstroFields\Core;

class Table implements Core\Templates\TemplateInterface
{
	/** @type \SplPriorityQueue */
	private $entities;

	/**
	 * Attach the entities
	 * @param \SplPriorityQueue $entities
	 * @return $this
	 */
	public function attach( $entities )
	{
		$this->entities = $entities;

		return $this;
	}

	/**
	 * Render the Entities
	 * @return string
	 */
	public function display()
	{
		foreach( $this->entities as $entity )
		{
			?>
			<table class="form-table">
				<tr>
					<?php
					$this->entities
						->current()
						->notify();
					?>
				</tr>
			</table>
			<?php
		}
	}
}