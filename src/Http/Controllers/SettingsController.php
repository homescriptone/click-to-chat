<?php
namespace Homescriptone\ClickToChatWhatsapp\Http\Controllers;

use Homescriptone\ClickToChatWhatsapp\MetaValues;
use Statamic\Http\Controllers\CP\CpController;
use Statamic\Support\Arr;
use Illuminate\Http\Request;
use Statamic\Facades\User;
use Homescriptone\ClickToChatWhatsapp\Blueprint\Formulus;
use Homescriptone\ClickToChatWhatsapp\Http\Requests\StoreRequest;

class SettingsController extends CpController
{
    public function index( Request $request )
    {
        $user = User::fromUser( $request->user() );
        $blueprint = Formulus::getBlueprint();

        $fields = $blueprint->fields();
        $fields = $fields->preProcess();

        $values = new MetaValues( $fields );


        $data = [
            'title' => 'Settings',
            'user' => $user, 
            'blueprint' => $blueprint->toPublishArray(),
            'values' =>  $values->values(),
            'meta' => $fields->meta(),
        ];
 
        return view('homescriptone/click-to-chat-whatsapp::settings', $data); 
    }


    public function store(StoreRequest $request)
    {
        $fields = Formulus::getBlueprint()
            ->fields()
            ->addValues($request->validated());

        $fields->validate();

        $values = Arr::removeNullValues($fields->process()->values()->all());

        MetaValues::make($values)->save();

        return [
            'redirect' => cp_route( 'homescriptone/click-to-chat.settings' ),
        ];
    }
}
