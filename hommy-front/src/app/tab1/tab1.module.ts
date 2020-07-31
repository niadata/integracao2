import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouteReuseStrategy } from '@angular/router';
import { Tab1Page } from './tab1.page';
import { IonicModule, IonicRouteStrategy } from '@ionic/angular';
import { Tab1PageRoutingModule } from './tab1-routing.module';

// import { AppRoutingModule } from '../app-routing.module';
import { AppComponent } from '../app.component';

import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [Tab1Page],
  imports: [ Tab1PageRoutingModule, HttpClientModule, CommonModule],
  
  
})
export class Tab1PageModule {}