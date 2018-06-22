import { NgModule, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';

import { AuthGuard } from './../../guards/auth.guard';
import { AdminComponent } from './../admin.component';
import { AdminDashboard1Component } from './../admin-dashboard1/admin-dashboard1.component';
import { ProfileComponent } from './../../auth/profile/profile.component';
import {AcomodacoesComponent} from '../acomodacoes/acomodacoes.component';
import { DetalhesAcomodacaoComponent } from '../detalhes-acomodacao/detalhes-acomodacao.component';

@NgModule({
  imports: [
    RouterModule.forChild([
      {
        path: '',
        component: AdminComponent, canActivate: [AuthGuard], canActivateChild: [AuthGuard],
        children: [
          {
            path: '',
            redirectTo: 'home',
            pathMatch: 'full'
          },
          { path: 'home', component: AdminDashboard1Component },
          { path: 'profile', component: ProfileComponent },
          { path: 'acomodacoes', component: AcomodacoesComponent },
          { path: 'detalhes-acomodacao', component: DetalhesAcomodacaoComponent },

        ]
      }
    ])
  ],
  exports: [
    RouterModule
  ]
})
export class AdminRoutingModule { }
