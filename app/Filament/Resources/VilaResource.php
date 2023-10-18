<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VilaResource\Pages;
use App\Filament\Resources\VilaResource\RelationManagers;
use App\Models\Vila;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Auth;
use Redirect;
use Response;


class VilaResource extends Resource
{
    protected static ?string $model = Vila::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel="Fladolce";
    protected static ?string $modelLabel="Fladolce";
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('quality')->label('Q1'),
                
                
              
                ImageColumn::make('file'),

                TextColumn::make('branch1')->label('Branch'),
                TextColumn::make('sellers_satis')->label('Q3'),
                TextColumn::make('cashier_satis')->label('Q4'),
                TextColumn::make('total_satis')->label('Q5'),
                TextColumn::make('note')->label('Note'),
                TextColumn::make('created_at'),
            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),


                Action::make('View File')
                ->label('View File')
                ->action(function ( Vila $vila) {
                    // generate PDF here from the current $record

                    
                    
if(

    
    file_exists('storage/'.$vila->file)
 
    
    
    ){

    $filepath = public_path('storage/'.$vila->file);
    return Response::download($filepath);

}

else{

    

    Notification::make()
    ->title("Info")
    ->body("No file found")
    ->color('success')
    ->send();
 
 

}
                  
                //return Redirect::to("storage/".$cv->cf_file);

                //return response()->file("storage/".$cv->cf_file);
                    
                })

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                //Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListVilas::route('/'),
            
        ];
    }    
}
