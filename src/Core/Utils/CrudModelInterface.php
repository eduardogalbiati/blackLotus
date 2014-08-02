<?Php
namespace Core\Utils;

interface CrudModelInterface
{

	/**
     *
     * @return array[quotemeta( )]
     */
	public function loadEditViewInfo();
	public function loadListActionInfo();
}