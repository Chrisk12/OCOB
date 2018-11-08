<?php

/**
 * A checkbox field
 */
class HTMLCheckField extends HTMLFormField {
	function getInputHTML( $value ) {
		global $wgUseMediaWikiUIEverywhere;

		if ( !empty( $this->mParams['invert'] ) ) {
			$value = !$value;
		}

		$attr = $this->getTooltipAndAccessKey();
		$attr['id'] = $this->mID;

		$attr += $this->getAttributes( array( 'disabled', 'tabindex' ) );

		if ( $this->mClass !== '' ) {
			$attr['class'] = $this->mClass;
		}

		if ( $this->mParent->isVForm() ) {
			// Nest checkbox inside label.
			return Html::rawElement( 'label',
				array(
					'class' => 'mw-ui-checkbox-label'
				),
				Xml::check( $this->mName, $value, $attr ) . $this->mLabel );
		} else {
			$chkLabel = Xml::check( $this->mName, $value, $attr )
			. '&#160;'
			. Html::rawElement( 'label', array( 'for' => $this->mID ), $this->mLabel );

			if ( $wgUseMediaWikiUIEverywhere ) {
				$chkLabel = Html::rawElement(
					'div',
					array( 'class' => 'mw-ui-checkbox' ),
					$chkLabel
				);
			}

			return $chkLabel;
		}
	}

	/**
	 * For a checkbox, the label goes on the right hand side, and is
	 * added in getInputHTML(), rather than HTMLFormField::getRow()
	 * @return string
	 */
	function getLabel() {
		return '&#160;';
	}

	/**
	 * checkboxes don't need a label.
	 * @return bool
	 */
	protected function needsLabel() {
		return false;
	}

	/**
	 * @param WebRequest $request
	 *
	 * @return string
	 */
	function loadDataFromRequest( $request ) {
		$invert = false;
		if ( isset( $this->mParams['invert'] ) && $this->mParams['invert'] ) {
			$invert = true;
		}

		// GetCheck won't work like we want for checks.
		// Fetch the value in either one of the two following case:
		// - we have a valid token (form got posted or GET forged by the user)
		// - checkbox name has a value (false or true), ie is not null
		if ( $request->getCheck( 'wpEditToken' ) || $request->getVal( $this->mName ) !== null ) {
			// XOR has the following truth table, which is what we want
			// INVERT VALUE | OUTPUT
			// true   true  | false
			// false  true  | true
			// false  false | false
			// true   false | true
			return $request->getBool( $this->mName ) xor $invert;
		} else {
			return $this->getDefault();
		}
	}
}
