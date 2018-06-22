import {Component, EventEmitter, Input, OnInit, Output} from '@angular/core';

@Component({
  selector: 'app-paginate2',
  templateUrl: './paginate2.component.html',
  styleUrls: ['./paginate2.component.css']
})
export class Paginate2Component implements OnInit {
  ngOnInit(): void {
    throw new Error("Method not implemented.");
  }

  title: string;

  @Input()
  previousText = 'Previous';

  @Input()
  nextText = 'Next';

  @Input()
  pageCount: number;

  @Input()
  page: number;

  @Output()
  pageChanged = new EventEmitter<number>();

  nextPage() {
    this.page ++;
    this.pageChanged.emit(this.page);
  }

  previousPage() {
    this.page --;
    this.pageChanged.emit(this.page);
  }

  hasPrevious(): boolean { return +this.page > 1; }

  hasNext(): boolean { return +this.page < +this.pageCount; }


}
