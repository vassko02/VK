import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NavigationComponent } from './navigation/navigation.component';
import { MatSliderModule } from '@angular/material/slider';
import { NyitoOldalComponent } from './nyito-oldal/nyito-oldal.component';
import { RolunkComponent } from './rolunk/rolunk.component';
import { CsapatunkComponent } from './csapatunk/csapatunk.component';
import { GaleriaComponent } from './galeria/galeria.component';
import { ItalLapComponent } from './ital-lap/ital-lap.component';
import { BorLapComponent } from './bor-lap/bor-lap.component';


@NgModule({
  declarations: [
    AppComponent,
    NavigationComponent,
    NyitoOldalComponent,
    RolunkComponent,
    CsapatunkComponent,
    GaleriaComponent,
    ItalLapComponent,
    BorLapComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MatSliderModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
