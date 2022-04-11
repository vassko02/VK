import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BorLapComponent } from './bor-lap/bor-lap.component';
import { CsapatunkComponent } from './csapatunk/csapatunk.component';
import { GaleriaComponent } from './galeria/galeria.component';
import { ItalLapComponent } from './ital-lap/ital-lap.component';
import { NavigationComponent } from './navigation/navigation.component';
import { NyitoOldalComponent } from './nyito-oldal/nyito-oldal.component';
import { RolunkComponent } from './rolunk/rolunk.component';

const routes: Routes = [
  {path:'rolunk',component:RolunkComponent},
  {path:'csapatunk',component:CsapatunkComponent},
  {path:'galeria',component:GaleriaComponent},
  {path:'itallap',component:ItalLapComponent},
  {path:'borlap',component:BorLapComponent},

  {path:'**',component:NyitoOldalComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
