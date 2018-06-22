import { AdminRoutingModule } from './admin-routing/admin-routing.module';
import { AdminDashboard1Component } from './admin-dashboard1/admin-dashboard1.component';
import { AdminControlSidebarComponent } from './admin-control-sidebar/admin-control-sidebar.component';
import { AdminFooterComponent } from './admin-footer/admin-footer.component';
import { AdminContentComponent } from './admin-content/admin-content.component';
import { AdminLeftSideComponent } from './admin-left-side/admin-left-side.component';
import { AdminHeaderComponent } from './admin-header/admin-header.component';
import { AdminComponent } from './admin.component';
import {ErrorHandler, NgModule} from '@angular/core';
import { CommonModule } from '@angular/common';
import { AcomodacoesComponent } from './acomodacoes/acomodacoes.component';
import {TokenInterceptor} from '../interceptors/token.interceptor';
import {RefreshTokenInterceptor} from '../interceptors/refresh-token.interceptor';
import {AuthGuard} from '../guards/auth.guard';
import {AplicationErrorHandle} from '../app.error-handle';
import {HTTP_INTERCEPTORS} from '@angular/common/http';
import {AcomodacoesService} from '../services/acomodacoes.service';
import { PaginateComponent } from './paginate/paginate.component';
import { Paginate2Component } from './paginate2/paginate2.component';
import { DetalhesAcomodacaoComponent } from './detalhes-acomodacao/detalhes-acomodacao.component';

import { AgmCoreModule, MapsAPILoader } from '@agm/core';
import { FormsModule } from '@angular/forms';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    AdminRoutingModule,
    AgmCoreModule.forRoot({
      apiKey: 'AIzaSyB7wDgp1-dRIZZD8h4raP05c7UrPa59ZOs',
      libraries: ['places']
    })
  ],
  declarations: [
    AdminComponent,
    AdminHeaderComponent,
    AdminLeftSideComponent,
    AdminContentComponent,
    AdminFooterComponent,
    AdminControlSidebarComponent,
    AdminDashboard1Component,
    AcomodacoesComponent,
    PaginateComponent,
    Paginate2Component,
    DetalhesAcomodacaoComponent,
  ],
  exports: [AdminComponent],
  providers: [
    AcomodacoesService
  ],
})
export class AdminModule { }
