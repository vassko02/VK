import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NyitoOldalComponent } from './nyito-oldal/nyito-oldal.component';
import { NavigationComponent } from './navigation/navigation.component';
import { RolunkComponent } from './rolunk/rolunk.component';
import { CsapatunkComponent } from './csapatunk/csapatunk.component';
import { GaleriaComponent } from './galeria/galeria.component';
import { ItalLapComponent } from './ital-lap/ital-lap.component';
import { BorLapComponent } from './bor-lap/bor-lap.component';
import {HttpClientModule} from '@angular/common/http';
import {ElerhetosegeinkComponent } from './elerhetosegeink/elerhetosegeink.component';
import {FormsModule} from '@angular/forms';
import { KaveinkComponent } from './kaveink/kaveink.component';
import { ReggeliComponent } from './reggeli/reggeli.component';

@NgModule({
  declarations: [
    AppComponent,
    NyitoOldalComponent,
    NavigationComponent,
    RolunkComponent,
    CsapatunkComponent,
    GaleriaComponent,
    ItalLapComponent,
    BorLapComponent,
    ElerhetosegeinkComponent,
    KaveinkComponent,
    ReggeliComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
