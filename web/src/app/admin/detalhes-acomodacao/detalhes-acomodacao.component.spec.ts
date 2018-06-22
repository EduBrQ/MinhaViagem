import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DetalhesAcomodacaoComponent } from './detalhes-acomodacao.component';

describe('DetalhesAcomodacaoComponent', () => {
  let component: DetalhesAcomodacaoComponent;
  let fixture: ComponentFixture<DetalhesAcomodacaoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DetalhesAcomodacaoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DetalhesAcomodacaoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
