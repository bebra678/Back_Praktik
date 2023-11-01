<?php

namespace Controller;
use http\Env\Response;
use Model\DisEmp;
use Model\Emp_dis;
use Src\Request;
use Src\View;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;
use Model\Employee;
use Model\Discipline;
use Model\Position;
use Model\Subdivision;
use Model\Type_subdivision;
use Model\Pod_dis;

class Site
{
//    public function index(Request $request): string
//    {
//        $posts = Post::where('id', $request->id)->get();
//        return (new View())->render('site.post', ['posts' => $posts]);
//    }

   public function hello(): string
   {
       return new View('site.hello', ['message' => 'hello working']);
   }

   public function signup(Request $request): string
   {
      if ($request->method === 'POST') {
   
          $validator = new Validator($request->all(), [
              'name' => ['required'],
              'login' => ['required', 'unique:users,login'],
              'password' => ['required']
          ], [
              'required' => 'Поле :field пусто',
              'unique' => 'Поле :field должно быть уникально'
          ]);
   
          if($validator->fails()){
              return new View('site.signup',
                  ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
          }
   
          if (User::create($request->all())) {
              app()->route->redirect('/login');
          }
      }
      return new View('site.signup');
   }
   
    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
    //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/glav');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function glav(): string
    {
        return new View('site.glav');
    }

    public function dis(Request $request): string
    {
        $subdivisions = Subdivision::all();
        $positions = Position::all();
        $disciplines = Discipline::all();
        $employees = Employee::all();
        if ($request->method === 'POST')
        {
            $id = $request->id_dis;
            $emp_dis = Emp_dis::where('id_dis', $id)->get();
//            $i = 0;
//            foreach($emp_dis as $el)
//            {
//                    $data[$i] = $el->id_emp;
//                    $i++;
//            }
//            for($i = 0; $i <= count($emp_dis); $i++)
//            {
//                foreach($emp_dis as $el)
//                {
//                    $data[$i] = $el->id_emp;
//                }
//            }
            return (new View())->render('site.dis_check', ['emp_dis' => $emp_dis, 'id' => $id, 'employees' => $employees, 'subdivisions' => $subdivisions, 'positions' => $positions]);
        }
        return (new View())->render('site.dis', ['disciplines' => $disciplines]);
    }

//    public function dis_check(Response $id) :string
//    {
//        return (new View())->render('site.dis_check', ['id' => $id]);
//    }

    public function pod(Request $request): string
    {
        $subdivisions = Subdivision::all();
        $employees = Employee::all();
        $disciplines = Discipline::all();
        $positions = Position::all();
        $pod_dis1 = Pod_dis::all();
        if($request->method === 'POST')
        {
            if($request->type_post === 'sub')
            {
                $id = $request->id;
                $poss = Subdivision::where('id', $id)->get();
                foreach ($poss as $el)
                {
                    $name = $el->name;
                }
                $pod_dis = Pod_dis::where('id_pod', $id)->get();
                return (new View())->render('site.pod_check', ['name' => $name ,'positions' => $positions ,'employees' => $employees, 'disciplines' => $disciplines, 'pod_dis' => $pod_dis, 'subdivisions' => $subdivisions]);
            }
            elseif($request->type_post === 'dis')
            {
                $id = $request->id;
                $emp_dis = Emp_dis::where('id_dis', $id)->get();
                return (new View())->render('site.dis_check', ['emp_dis' => $emp_dis, 'id' => $id, 'employees' => $employees, 'subdivisions' => $subdivisions, 'positions' => $positions]);
            }
            elseif($request->type_post === 'dis1')
            {
                $id = $request->id;
                $emp_dis = Emp_dis::where('id_dis', $id)->get();
                return (new View())->render('site.dis_check', ['emp_dis' => $emp_dis ,'emp_dis1' => $emp_dis1, 'id' => $id, 'employees' => $employees, 'subdivisions' => $subdivisions, 'positions' => $positions]);
            }
        }
        return (new View())->render('site.pod', ['pod_dis1' => $pod_dis1,'employees' => $employees, 'disciplines' => $disciplines, 'subdivisions' => $subdivisions]);
    }

    public function check(Request $request): string
    {
        $employees = Employee::all();
        $disciplines = Discipline::all();
        $emp_dis = Emp_dis::all();
        if ($request->method === 'POST')
        {
            if($request->type_post === 'emp')
            {
                $id = $request->id;
                $emp = Employee::where('id', $id)->get();
                $emp_dis_emp = Emp_dis::where('id_emp', $id)->get();
                foreach ($emp as $el)
                {
                    $name = $el->first_name . ' ' . $el->name . ' ' . $el->second_name;
                }
                return (new View())->render('site.check_emp', ['name' => $name, 'emp_dis_emp' => $emp_dis_emp, 'id' => $id, 'disciplines' => $disciplines]);
            }
            elseif($request->type_post === 'dis')
            {
                $positions = Position::all();
                $subdivisions = Subdivision::all();
                $id = $request->id;
                $emp_dis = Emp_dis::where('id_dis', $id)->get();
                return (new View())->render('site.dis_check', ['emp_dis' => $emp_dis, 'id' => $id, 'employees' => $employees, 'subdivisions' => $subdivisions, 'positions' => $positions]);
            }
        }
        return (new View())->render('site.check', ['employees' => $employees, 'disciplines' => $disciplines, 'emp_dis' => $emp_dis]);
    }

    public function sot(Request $request): string
    {
        $subdivisions = Subdivision::all();
        $positions = Position::all();
        $employees = Employee::all();
        if(!empty($_GET["radio"]))
        {
            if($_GET['radio'] != 'Все')
            {
                $id = $_GET["radio"];
                $employees = Employee::where('id_subdivision', $id)->get();
            }
            //var_dump($_GET['radio']);
        }
        if($request->method === 'POST')
        {
            if($request->type_post === 'search')
            {
                $data = $request->data;
                $data_fio[0] = 'Пусто';
                foreach($employees as $el)
                {
                    $data_fio[] = $el->first_name . ' ' . $el->name . ' ' . $el->second_name;
                }
                for($i = 1; $i < count($data_fio); $i++)
                {
                    if(str_contains($data_fio[$i], $data))
                    {
                        $emp = Employee::where('id', $i)->get();
                    }
                }
                if(empty($emp))
                {
                    return (new View())->render('site.search');
                }
                else
                {
                    return (new View())->render('site.search', ['emp' => $emp, 'subdivisions' => $subdivisions, 'positions' => $positions]);
                }
            }
        }
        return (new View())->render('site.sot', ['employees' => $employees, 'subdivisions' => $subdivisions, 'positions' => $positions]);
    }

    public function add_sot(Request $request): string
    {
        if ($request->method === 'POST') {

            $employee = Employee::create($request->all());
            //$employee->photo($_FILES['photo']);
            $employee->save();
            app()->route->redirect('/sot');
        }
        return new View('site.add_sot');
    }
}


























//
//
//public function sot(Request $request): string
//{
//    $subdivisions = Subdivision::all();
//    $positions = Position::all();
//    $employees = Employee::all();
//    if(!empty($_GET["radio"]))
//    {
//        if($_GET['radio'] != 'Все')
//        {
//            $id = $_GET["radio"];
//            $employees = Employee::where('id_subdivision', $id)->get();
//        }
//        //var_dump($_GET['radio']);
//    }
//    if($request->method === 'POST')
//    {
//        if($request->type_post === 'search')
//        {
//            $data = $request->data;
//            $data_fio[0] = 'Пусто';
//            if(!empty($_GET["radio"]))
//            {
//                if ($_GET['radio'] != 'Все')
//                {
//                    $emp_for = Employee::where('id_subdivision', $id)->get();
//                    foreach ($emp_for as $el)
//                    {
//                        $data_fio[] = $el->first_name . ' ' . $el->name . ' ' . $el->second_name;
//                    }
//                }
//            }
//            else
//            {
//                foreach($employees as $el)
//                {
//                    $data_fio[] = $el->first_name . ' ' . $el->name . ' ' . $el->second_name;
//                }
//            }
//            foreach($employees as $el)
//            {
//                $data_fio[] = $el->first_name . ' ' . $el->name . ' ' . $el->second_name;
//            }
//            for($i = 1; $i < count($data_fio); $i++)
//            {
//                if(str_contains($data_fio[$i], $data))
//                {
//                    $emp = Employee::where('id', $i)->get();
//                }
//            }
//            if(empty($emp))
//            {
//                return (new View())->render('site.search');
//            }
//            else
//            {
//                return (new View())->render('site.search', ['emp' => $emp, 'subdivisions' => $subdivisions, 'positions' => $positions]);
//            }
//        }
//    }
//    return (new View())->render('site.sot', ['employees' => $employees, 'subdivisions' => $subdivisions, 'positions' => $positions]);
//}
