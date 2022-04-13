import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BorLapComponent } from './bor-lap/bor-lap.component';
import { CsapatunkComponent } from './csapatunk/csapatunk.component';
import { ElerhetosegeinkComponent } from './elerhetosegeink/elerhetosegeink.component';
import { GaleriaComponent } from './galeria/galeria.component';
import { ItalLapComponent } from './ital-lap/ital-lap.component';
import { NyitoOldalComponent } from './nyito-oldal/nyito-oldal.component';
import { RolunkComponent } from './rolunk/rolunk.component';
import { KaveinkComponent } from './kaveink/kaveink.component';
import { ReggeliComponent } from './reggeli/reggeli.component';

const routes: Routes = [
{path:'',redirectTo:'/nyitooldal',pathMatch:'full'},
{path:'rolunk',component:RolunkComponent},
{path:'csapatunk',component:CsapatunkComponent},
{path:'galeria',component:GaleriaComponent},
{path:'itallap',component:ItalLapComponent},
{path:'borlap',component:BorLapComponent},
{path:'elerhetosegeink',component:ElerhetosegeinkComponent},
{path:'kaveink',component:KaveinkComponent},
{path:'reggeli',component:ReggeliComponent},

{path:'**',component:NyitoOldalComponent}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
