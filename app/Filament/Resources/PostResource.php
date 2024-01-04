<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        // membuat form untuk post
        return $form
            ->schema([
                TextInput::make('title')->required()->minLength(2),
                TextInput::make('slug')->required()->minLength(2),
                RichEditor::make('content')->required(),
                TextInput::make('meta_description'),
                Checkbox::make('is_publish'),
                Hidden::make('user_id')->dehydrateStateUsing(fn ($state) => Auth::id()),
                SpatieMediaLibraryFileUpload::make('image')->image()->imageEditor(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // membuat list post yang sudah dibuat
            ->columns([
                SpatieMediaLibraryImageColumn::make('image'),
                TextColumn::make('title'),
                TextColumn::make('slug'),
                CheckboxColumn::make('is_publish'),
            ])
            // membuat filter data Post
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
