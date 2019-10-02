<?php
	//pacote ao qual a classe pertence
	namespace Export;

	use Export\Contract\Export;

	class XmlExport implements Export {
		public function doExport() {
			return 'Xml Exported!';
		}
	}