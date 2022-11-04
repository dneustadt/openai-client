<?php

use GuzzleHttp\Client;
use OpenAI\Client\Configuration;
use Symfony\Component\Dotenv\Dotenv;
use Tinkerwell\ContextMenu\SetCode;

class OpenAiClientTinkerwellDriver extends TinkerwellDriver
{
    public function canBootstrap($projectPath): bool
    {
        return file_exists($projectPath . '/lib/Api/CompletionsApi.php') &&
            file_exists($projectPath . '/lib/Model/CompletionPayload.php') &&
            file_exists($projectPath . '/lib/Model/Completion.php');
    }

    public function bootstrap($projectPath)
    {
        require $projectPath . '/vendor/autoload.php';

        if (class_exists(Dotenv::class) && (file_exists($projectPath . '/.env.local.php') || file_exists($projectPath . '/.env') || file_exists($projectPath . '/.env.dist'))) {
            (new Dotenv())->bootEnv($projectPath . '/.env');
        }
    }

    public function getAvailableVariables()
    {
        return [
            'config' => Configuration::getDefaultConfiguration()->setApiKey('Authorization', $_SERVER['API_KEY'] ?? ''),
            'client' => new Client(),
        ];
    }

    public function contextMenu()
    {
        return [
            SetCode::create(
                'Answer API Instance',
                '$api = new \OpenAI\Client\Api\AnswerApi($client, $config);' . \PHP_EOL
            ),
            SetCode::create(
                'Classification API Instance',
                '$api = new \OpenAI\Client\Api\ClassificationApi($client, $config);' . \PHP_EOL
            ),
            SetCode::create(
                'Completions API Instance',
                '$api = new \OpenAI\Client\Api\CompletionsApi($client, $config);' . \PHP_EOL
            ),
            SetCode::create(
                'Engines API Instance',
                '$api = new \OpenAI\Client\Api\EnginesApi($client, $config);' . \PHP_EOL
            ),
            SetCode::create(
                'Files API Instance',
                '$api = new \OpenAI\Client\Api\FilesApi($client, $config);' . \PHP_EOL
            ),
            SetCode::create(
                'Images API Instance',
                '$api = new \OpenAI\Client\Api\ImagesApi($client, $config);' . \PHP_EOL
            ),
            SetCode::create(
                'Search API Instance',
                '$api = new \OpenAI\Client\Api\SearchApi($client, $config);' . \PHP_EOL
            ),
        ];
    }
}
