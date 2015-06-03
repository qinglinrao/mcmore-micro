<?php

class CustUrlGenerator extends Illuminate\Routing\UrlGenerator {

	/**
	 * Generate a absolute URL to the given path.
	 *
	 * @param  string  $path
	 * @param  mixed  $extra
	 * @param  bool  $secure
	 * @return string
	 */
	public function to($path, $extra = array(), $secure = null)
	{
		// First we will check if the URL is already a valid URL. If it is we will not
		// try to generate a new one but will simply return the URL as is, which is
		// convenient since developers do not always have to check if it's valid.
		if ($this->isValidUrl($path)) return $path;

		$scheme = $this->getScheme($secure);

		$tail = implode('/', array_map(
				'rawurlencode', (array) $extra)
		);

		// Once we have the scheme we will compile the "tail" by collapsing the values
		// into a single string delimited by slashes. This just makes it convenient
		// for passing the array of parameters to this URL as a list of segments.
		$root = $this->getRootUrl($scheme);

		return $this->addUrlSuffix($this->trimUrl($root, $path, $tail));
	}

	/**
	 * Get the URL for a given route instance.
	 *
	 * @param  \Illuminate\Routing\Route  $route
	 * @param  array  $parameters
	 * @param  bool  $absolute
	 * @return string
	 */
	protected function toRoute($route, array $parameters, $absolute)
	{
		$domain = $this->getRouteDomain($route, $parameters);

		$uri = strtr(rawurlencode($this->trimUrl(
				$root = $this->replaceRoot($route, $domain, $parameters),
				$this->replaceRouteParameters($route->uri(), $parameters)
			)), $this->dontEncode).$this->getRouteQueryString($parameters);

		$uri = $this->addUrlSuffix($uri);

		return $absolute ? $uri : '/'.ltrim(str_replace($root, '', $uri), '/');
	}

	protected function addUrlSuffix($uri)
	{
		if(Config::get('app.add_slash_pattern') && preg_match(Config::get('app.add_slash_pattern'), $uri))
		{

			return $uri.'/';

		} elseif(Config::get('app.add_html_pattern') && preg_match(Config::get('app.add_html_pattern'), $uri)) {

			return $uri.Config::get('app.url_suffix');

		}
                
                return $uri;
	}
}
