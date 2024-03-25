<?php

declare(strict_types=1);

namespace TWOH\TwohKickstarter\UserFunctions;

use phpDocumentor\Reflection\Types\Boolean;
use TWOH\TwohKickstarter\Domain\Model\Contact;
use TWOH\TwohKickstarter\Domain\Repository\ContactRepository;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class AtomElementRenderer
{
    public function renderIcons(array &$config)
    {
        $this->renderImage(
            $config
        );
    }

    public function renderImage(array &$config)
    {
        $icons = scandir(Environment::getPublicPath() . '/fileadmin/Icons/');

        $config['items'][] = ['Empty', ''];

        foreach ($icons as $icon){
            if (str_contains($icon, '.svg')) {
                $value = str_replace('.svg', '', $icon);
                $label = ucfirst($value);
                $config['items'][] =[$label, $value];
            }
        }
    }

    public function renderTextColors(array &$config)
    {
        $config['items'] = $this->renderColors('text', false);
    }

    public function renderIconColors(array &$config)
    {
        $config['items'] = $this->renderColors('svg', false);
    }

    public function renderBackgroundColors(array &$config)
    {
        $config['items'] = $this->renderColors('bg', true);
    }

    /**
     * @param String $key
     * @param Boolean $gradient
     * @return array|array[]
     */
    protected function renderColors(String $key, bool $gradient)
    {
        $colors = [
            ['---', 0],
            [$this->translateByKey('colors.black'), $key . '-black'],
            [$this->translateByKey('colors.white'), $key . '-white'],
            [$this->translateByKey('colors.orange'), $key . '-orange'],
            [$this->translateByKey('colors.red'), $key . '-red'],
            [$this->translateByKey('colors.green'), $key . '-green'],
            [$this->translateByKey('colors.lightblue'), $key . '-lightBlue'],
            [$this->translateByKey('colors.darkblue'), $key . '-darkBlue'],
            [$this->translateByKey('colors.purple'), $key . '-purple'],
        ];

        if (!$gradient){
            return $colors;
        } else {
            $gradients = [
                [$this->translateByKey('colors.grad-1-bottom'), $key . '-grad-1-bottom'],
                [$this->translateByKey('colors.grad-1-bottom-inverse'), $key . '-grad-1-bottom-inverse'],
                [$this->translateByKey('colors.grad-1-right'), $key . '-grad-1-right'],
                [$this->translateByKey('colors.grad-1-right-inverse'), $key . '-grad-1-right-inverse'],
                [$this->translateByKey('colors.grad-1-bottom-right'), $key . '-grad-1-bottom-right'],
                [$this->translateByKey('colors.grad-1-bottom-right-inverse'), $key . '-grad-1-bottom-right-inverse'],
                [$this->translateByKey('colors.grad-1-top-right'), $key . '-grad-1-top-right'],
                [$this->translateByKey('colors.grad-1-top-right-inverse'), $key . '-grad-1-top-right-inverse'],
                [$this->translateByKey('colors.grad-2-bottom'), $key . '-grad-2-bottom'],
                [$this->translateByKey('colors.grad-2-bottom-inverse'), $key . '-grad-2-bottom-inverse'],
                [$this->translateByKey('colors.grad-2-right'), $key . '-grad-2-right'],
                [$this->translateByKey('colors.grad-2-right-inverse'), $key . '-grad-2-right-inverse'],
                [$this->translateByKey('colors.grad-2-bottom-right'), $key . '-grad-2-bottom-right'],
                [$this->translateByKey('colors.grad-2-bottom-right-inverse'), $key . '-grad-2-bottom-right-inverse'],
                [$this->translateByKey('colors.grad-2-top-right'), $key . '-grad-2-top-right'],
                [$this->translateByKey('colors.grad-2-top-right-inverse'), $key . '-grad-2-top-right-inverse'],
                [$this->translateByKey('colors.grad-3-bottom'), $key . '-grad-3-bottom'],
                [$this->translateByKey('colors.grad-3-bottom-inverse'), $key . '-grad-3-bottom-inverse'],
                [$this->translateByKey('colors.grad-3-right'), $key . '-grad-3-right'],
                [$this->translateByKey('colors.grad-3-right-inverse'), $key . '-grad-3-right-inverse'],
                [$this->translateByKey('colors.grad-3-bottom-right'), $key . '-grad-3-bottom-right'],
                [$this->translateByKey('colors.grad-3-bottom-right-inverse'), $key . '-grad-3-bottom-right-inverse'],
                [$this->translateByKey('colors.grad-3-top-right'), $key . '-grad-3-top-right'],
                [$this->translateByKey('colors.grad-3-top-right-inverse'), $key . '-grad-3-top-right-inverse'],
                [$this->translateByKey('colors.grad-4-bottom'), $key . '-grad-4-bottom'],
                [$this->translateByKey('colors.grad-4-bottom-inverse'), $key . '-grad-4-bottom-inverse'],
                [$this->translateByKey('colors.grad-4-right'), $key . '-grad-4-right'],
                [$this->translateByKey('colors.grad-4-right-inverse'), $key . '-grad-4-right-inverse'],
                [$this->translateByKey('colors.grad-4-bottom-right'), $key . '-grad-4-bottom-right'],
                [$this->translateByKey('colors.grad-4-bottom-right-inverse'), $key . '-grad-4-bottom-right-inverse'],
                [$this->translateByKey('colors.grad-4-top-right'), $key . '-grad-4-top-right'],
                [$this->translateByKey('colors.grad-4-top-right-inverse'), $key . '-grad-4-top-right-inverse'],
                [$this->translateByKey('colors.grad-5-bottom'), $key . '-grad-5-bottom'],
                [$this->translateByKey('colors.grad-5-bottom-inverse'), $key . '-grad-5-bottom-inverse'],
                [$this->translateByKey('colors.grad-5-right'), $key . '-grad-5-right'],
                [$this->translateByKey('colors.grad-5-right-inverse'), $key . '-grad-5-right-inverse'],
                [$this->translateByKey('colors.grad-5-bottom-right'), $key . '-grad-5-bottom-right'],
                [$this->translateByKey('colors.grad-5-bottom-right-inverse'), $key . '-grad-5-bottom-right-inverse'],
                [$this->translateByKey('colors.grad-5-top-right'), $key . '-grad-5-top-right'],
                [$this->translateByKey('colors.grad-5-top-right-inverse'), $key . '-grad-5-top-right-inverse'],
                [$this->translateByKey('colors.grad-6-bottom'), $key . '-grad-6-bottom'],
                [$this->translateByKey('colors.grad-6-bottom-inverse'), $key . '-grad-6-bottom-inverse'],
                [$this->translateByKey('colors.grad-6-right'), $key . '-grad-6-right'],
                [$this->translateByKey('colors.grad-6-right-inverse'), $key . '-grad-6-right-inverse'],
                [$this->translateByKey('colors.grad-6-bottom-right'), $key . '-grad-6-bottom-right'],
                [$this->translateByKey('colors.grad-6-bottom-right-inverse'), $key . '-grad-6-bottom-right-inverse'],
                [$this->translateByKey('colors.grad-6-top-right'), $key . '-grad-6-top-right'],
                [$this->translateByKey('colors.grad-6-top-right-inverse'), $key . '-grad-6-top-right-inverse'],
            ];

            return array_merge($colors, $gradients);
        }
    }

    /**
     * @param array $config
     * @return void
     */
    public function renderGradient(array &$config): void
    {
        $config['items'] = [
            ['---', 0],
            [$this->translateByKey('pages.gradient.1'), 1],
            [$this->translateByKey('pages.gradient.2'), 2],
            [$this->translateByKey('pages.gradient.3'), 3],
            [$this->translateByKey('pages.gradient.4'), 4],
            [$this->translateByKey('pages.gradient.5'), 5],
            [$this->translateByKey('pages.gradient.6'), 6],
        ];
    }

    /**
     * @param array $config
     * @return void
     */
    public function renderMarginValues(array &$config): void
    {
        $config['items'] = [
            ['---', 0],
            [$this->translateByKey('xs'), 'quarter'],
            [$this->translateByKey('small'), 'half'],
            [$this->translateByKey('medium'), 1],
            [$this->translateByKey('large'), 2],
            [$this->translateByKey('xl'), 3],
            [$this->translateByKey('xxl'), 4],
            [$this->translateByKey('xxxl'), 5],
            [$this->translateByKey('superlarge6'), 6],
            [$this->translateByKey('superlarge7'), 7],
            [$this->translateByKey('superlarge8'), 8],
        ];
    }

    /**
     * @param array $config
     * @return void
     */
    public function renderMarginPosValues(array &$config): void
    {
        $config['items'] = [
            ['---', 0],
            [$this->translateByKey('gridelement.container.settings.top'), 't-'],
            [$this->translateByKey('gridelement.container.settings.bottom'), 'b-'],
            [$this->translateByKey('gridelement.container.settings.top-bottom'), 'y-'],
        ];
    }

    /**
     * @param array $config
     * @return void
     */
    public function renderHeadlineValues(array &$config): void
    {
        $config['items'] = [
            ['h1', 'h1'],
            ['h2', 'h2'],
            ['h3', 'h3'],
            ['h4', 'h4'],
            ['h5', 'h5'],
            ['h6', 'h6'],
            ['h7', 'h7'],
            ['h8', 'h8'],
            ['h9', 'h9'],
        ];
    }

    /**
     * @param array $config
     * @return void
     */
    public function renderAspectRatioValues(array &$config): void
    {
        $config['items'] = [
            ['---', 0],
            ['1 / 1', '1 / 1'],
            ['2 / 1', '2 / 1'],
            ['1 / 2', '1 / 2'],
            ['16 / 9', '16 / 9'],
            ['21 / 9', '21 / 9'],
        ];

        if ($config['row']['CType'][0] === 'twoh_sliderimageelement') {
            $config['items'][] = ['21 / 10 [Home-Slider optimized]', '21 / 10'];
        }
    }

    /**
     * @param array $config
     * @return void
     */
    public function renderAspectVideoRatioValues(array &$config): void
    {
        $config['items'] = [
            ['---', 0],
            ['21x9', '21x9'],
            ['16x9', '16x9'],
            ['4x3', '4x3'],
            ['1x1', '1x1'],
        ];
    }

    /**
     * @param array $config
     * @return void
     */
    public function renderPositionValues(array &$config): void
    {
        $config['items'] = [
            ['---', 0],
            [$this->translateByKey('justify-content-start'), 'justify-content-start'],
            [$this->translateByKey('justify-content-center'), 'justify-content-center'],
            [$this->translateByKey('justify-content-end'), 'justify-content-end'],
        ];
    }

    /**
     * @param array $config
     * @return void
     */
    public function renderColValues(array &$config): void
    {
        $config['items'] = [
            ['---', 0],
            ['25%', 'w25'],
            ['33%', 'w33'],
            ['50%', 'w50'],
            ['66%', 'w66'],
            ['75%', 'w75'],
            ['100%', 'w100'],
        ];
    }

    /**
     * @param array $config
     * @return void
     */
    public function renderContacts(array &$config): void
    {
        $contactRepository = GeneralUtility::makeInstance(ContactRepository::class);
        $contacts = $contactRepository->findAll();

        $config['items'] = [
            ['---', 0],
        ];

        if ($contacts->count() > 0) {
            /** @var Contact $contact */
            foreach ($contacts as $contact) {
                $config['items'][] = [$contact->getTitle() . ' - ' . $contact->getPosition(), $contact->getUid()];
            }
        }
    }

    /**
     * @param string $key
     * @return string
     */
    protected function translateByKey(
        string $key
    ): string
    {
        return LocalizationUtility::translate(
            $key,
            'twoh_kickstarter'
        );
    }
}