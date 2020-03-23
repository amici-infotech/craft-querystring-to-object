<?php
namespace amici\QuerystringToObject\twigextensions;

use Twig\TwigFilter;
use Twig\Environment as TwigEnvironment;

class QuerystringToObjectTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'Querystring to Object';
    }

	public function getFilters(): array
    {
        return [
            new TwigFilter('queryToObj', [$this, 'queryToObj']),
        ];
    }

    public function queryToObj($data)
    {

        $result = [];

        if(strpos($data, '='))
        {

            if(strpos($data, '?') !== false)
            {
                $q = parse_url($data);
                $data = $q['query'];
            }

            foreach (explode('&', $data) as $couple)
            {
                list ($key, $val) = explode('=', $couple);
                $result[$key] = $val;
            }

        }

        return $result;

    }

}