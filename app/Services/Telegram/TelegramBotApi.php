<?php

namespace App\Services\Telegram;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class TelegramBotApi
{

    const HOST = 'https://api.telegram.org/bot';

    /**
     * @throws RequestException
     */
    public static function sendMessage(
        string $token,
        int $chat_id,
        string $text
    ): bool {
        return Http::get(self::HOST.$token.'/sendMessage', [
            'chat_id' => $chat_id,
            'text' => $text,
        ])->throw()
            ->successful();

    }

}
