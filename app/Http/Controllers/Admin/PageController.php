<?php

namespace App\Http\Controllers\Admin;

use App\Document;
use App\Models\PageField;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;
use Storage;

class PageController extends BaseController
{
    /**
     * @param $key
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($key)
    {
        $page = PageField::where('key', $key)->first();
        if ($key == 'about') {
            $awards = Document::where('type', 'award')->get();
            $licenses = Document::where('type', 'license')->get();
            $shows = Document::where('type', 'show')->get();
        }

        return view('admin.pages.' . $key, [
            'page' => $page,
            'awards' => $awards ?? null,
            'licenses' => $licenses ?? null,
            'shows' => $shows ?? null
        ]);
    }

    /**
     * @param Request $request
     * @param $key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $key)
    {
        $fields = $request->except(['_token', '_method']);


        if ($key == 'about') {
           Document::truncate();

            if (!empty($fields['old_rewards'])) {
                foreach ($fields['old_rewards'] as $old_reward) {
                    Document::create([
                        'type' => 'award',
                        'image' => $old_reward
                    ]);
                }
                unset($fields['old_rewards']);
            }


            if (!empty($fields['awards'])) {
                foreach ($fields['awards'] as $award) {
                    Storage::disk('public')->put($award['image']->getClientOriginalName(), file_get_contents($award['image']));
                    Document::create([
                        'type' => 'award',
                        'image' => $award['image']->getClientOriginalName()
                    ]);
                }
                unset($fields['awards']);
            }

            if (!empty($fields['old_licenses'])) {
                foreach ($fields['old_licenses'] as $old_license) {
                    Document::create([
                        'type' => 'license',
                        'image' => $old_license
                    ]);
                }
                unset($fields['old_licenses']);
            }

            if (!empty($fields['licenses'])) {
                foreach ($fields['licenses'] as $license) {
                    Storage::disk('public')->put($license['image']->getClientOriginalName(), file_get_contents($license['image']));
                    Document::create([
                        'type' => 'license',
                        'image' => $license['image']->getClientOriginalName()
                    ]);
                }
                unset($fields['licenses']);
            }

            if (!empty($fields['old_shows'])) {
                foreach ($fields['old_shows'] as $old_show) {
                    Document::create([
                        'type' => 'show',
                        'image' => $old_show
                    ]);
                }
                unset($fields['old_shows']);
            }

            if (!empty($fields['shows'])) {
                foreach ($fields['shows'] as $show) {
                    Storage::disk('public')->put($show['image']->getClientOriginalName(), file_get_contents($show['image']));
                    Document::create([
                        'type' => 'show',
                        'image' => $show['image']->getClientOriginalName()
                    ]);
                }
                unset($fields['shows']);
            }
        }

        PageField::where('key', $key)->update($fields);

        return redirect()->route('admin.info_pages.index', $key);
    }
}
