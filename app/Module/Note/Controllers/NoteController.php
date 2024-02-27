<?php

declare(strict_types=1);

namespace App\Module\Note\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use App\Module\Note\Commands\CreateNoteCommand;
use App\Module\Note\Commands\DestroyNoteCommand;
use App\Module\Note\Commands\UpdateNoteCommand;
use App\Module\Note\Contracts\Queries\NoteQuery;
use App\Module\Note\Requests\NoteRequest;
use App\Module\Note\Requests\StoreNoteRequest;
use App\Module\Note\Requests\UpdateNoteRequest;
use App\Module\Note\Resources\NotesResource;
use App\Module\Note\Resources\ShowNoteResource;

final class NoteController extends Controller
{
    public function __construct(
        private readonly NoteQuery $query
    ) {
    }

    public function store(StoreNoteRequest $request): MessageResource
    {
        dispatch(new CreateNoteCommand(
            $request->getDTO()
        ));

        return (new MessageResource(null))
            ->setMessage('Заметка успешно создана!')
            ->setCode(200);
    }

    public function show(int $id): ShowNoteResource
    {
        return new ShowNoteResource(
            $this->query->findById($id)
        );
    }

    public function index(NoteRequest $request): NotesResource
    {
        return new NotesResource(
            $this->query->getAll($request->getDTO())
        );
    }

    public function update(int $id, UpdateNoteRequest $request): MessageResource
    {
        dispatch(new UpdateNoteCommand(
            $id,
            $request->getDTO()
        ));

        return (new MessageResource(null))
            ->setMessage('Заметка успешно изменена!')
            ->setCode(200);
    }

    public function destroy(int $id): MessageResource
    {
        dispatch(new DestroyNoteCommand($id));

        return (new MessageResource(null))
            ->setMessage('Заметка успешно удалена!')
            ->setCode(200);
    }
}
