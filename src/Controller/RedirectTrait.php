<?php

declare(strict_types=1);

namespace MazerTemplates\Controller;

use Cake\Event\EventInterface;
use Cake\Http\Response;
use Psr\Http\Message\UriInterface;

/**
 * RedirectTrait
 */
trait RedirectTrait
{
    public string $redirectKey = 'redirect';

    /**
     * Before render callback.
     *
     * @param \Cake\Event\EventInterface $event The beforeRender event.
     */
    public function beforeRender(EventInterface $event)
    {
        parent::beforeRender($event);
        $this->set($this->redirectKey, $this->getRedirect());
    }

    /**
     * Redirects to another page. If no URL is provided,
     * it will use the referrer URL.
     *
     * @param string|array|\Psr\Http\Message\UriInterface $url A string, array-based URL or UriInterface instance.
     * @param int $status HTTP status code (default 302)
     * @return \Cake\Http\Response|null
     */
    public function redirect(UriInterface|array|string $url, int $status = 302): ?Response
    {
        return parent::redirect($this->getRedirect() ?? $url, $status);
    }

    /**
     * Force redirect to another page.
     *
     * @param string|array|\Psr\Http\Message\UriInterface $url A string, array-based URL or UriInterface instance.
     * @param int $status HTTP status code (default 302)
     * @return \Cake\Http\Response|null
     */
    public function forceRedirect(UriInterface|array|string $url, int $status = 302): ?Response
    {
        return parent::redirect($url, $status);
    }

    /**
     * Get the redirect URL.
     *
     * @return string|null
     */
    protected function getRedirect(): ?string
    {
        return $this->getRequest()->getQuery($this->redirectKey) ?? $this->getRequest()->getData($this->redirectKey) ?? null;
    }
}
