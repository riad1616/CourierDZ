<?php

declare(strict_types=1);

namespace CourierDZ\ShippingProviders;

use CourierDZ\ProviderIntegrations\EcotrackProviderIntegration;


class HhdProvider extends EcotrackProviderIntegration
{
    /**
     * The url for the provider's API.
     */
    public static function apiDomain(): string
    {
        return 'https://hhdexpress.ecotrack.dz/';
    }

    /**
     * {@inheritdoc}
     */
    public static function metadata(): array
    {
        return [
            'name' => 'Hhd',
            'title' => 'HHD',
            'logo' => 'https://hhd.dz/assets/img/logo.png',
            'description' => 'HHD livraison est une entreprise algérienne opérant dans le secteur de livraison express',
            'website' => 'https://hhd.dz/',
            'api_docs' => 'https://hhd.dz/',
            'support' => 'https://hhd.dz/#contact',
            'tracking_url' => 'https://hhd.dz/#hero',
        ];
    }
}
