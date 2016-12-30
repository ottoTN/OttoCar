<?php

/* fiche/index-worker.html.twig */
class __TwigTemplate_0be04e4239eca87c204245e03f0d6e30071468b50a6422190bffd8e028c360d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fiche/index-worker.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02b672db16fefc622c5da95bc36675295397a61a223dc90f82152e8eda14035e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b672db16fefc622c5da95bc36675295397a61a223dc90f82152e8eda14035e->enter($__internal_02b672db16fefc622c5da95bc36675295397a61a223dc90f82152e8eda14035e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-worker.html.twig"));

        $__internal_fa381e6d8d2701455a9a368ca051a62dcb17d90882804b1b7e9ccaa8b0217b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa381e6d8d2701455a9a368ca051a62dcb17d90882804b1b7e9ccaa8b0217b74->enter($__internal_fa381e6d8d2701455a9a368ca051a62dcb17d90882804b1b7e9ccaa8b0217b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fiche/index-worker.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02b672db16fefc622c5da95bc36675295397a61a223dc90f82152e8eda14035e->leave($__internal_02b672db16fefc622c5da95bc36675295397a61a223dc90f82152e8eda14035e_prof);

        
        $__internal_fa381e6d8d2701455a9a368ca051a62dcb17d90882804b1b7e9ccaa8b0217b74->leave($__internal_fa381e6d8d2701455a9a368ca051a62dcb17d90882804b1b7e9ccaa8b0217b74_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_94f6e2210fe86b96830d70d95a87812c2bbdb532ea229b7b5e3bf1894ed71268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f6e2210fe86b96830d70d95a87812c2bbdb532ea229b7b5e3bf1894ed71268->enter($__internal_94f6e2210fe86b96830d70d95a87812c2bbdb532ea229b7b5e3bf1894ed71268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1f54d3731795e3055a8fc1e2907dcc4c929c14af9c80451c038ef6e9df243d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f54d3731795e3055a8fc1e2907dcc4c929c14af9c80451c038ef6e9df243d3->enter($__internal_a1f54d3731795e3055a8fc1e2907dcc4c929c14af9c80451c038ef6e9df243d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
   <div class=\"pull-middle\">
      <input  type=\"checkbox\" checked data-toggle=\"toggle\" data-on=\"<i class='fa fa-thumbs-up'></i> Available\" data-off=\"<i class='fa fa-thumbs-down'></i> Busy\" data-onstyle=\"success\" data-offstyle=\"danger\" data-width=\"100\"> 
   </div>
   <div class=\"span12\">
      <div class=\"panel with-nav-tabs panel-primary\">
         <div class=\"panel-heading\">
            <ul class=\"nav nav-tabs\">
               <li class=\"active\"><a href=\"#tab1primary\" data-toggle=\"tab\">Complete</a>
               </li>
               <li><a href=\"#tab2primary\" data-toggle=\"tab\">Show All</a>
               </li>
            </ul>
         </div>
         <div class=\"panel-body\">
            <div class=\"tab-content\">
               <div class=\"tab-pane fade in active\" id=\"tab1primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
                           <h5>All Files</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                                <th>File ID</th>
                                                <th>Date</th>
                                                <th>Client</th>
                                                <th>Problem Description</th>
                                                <th>Add (Diagnosis, Solution ..)</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 39
            echo "                                 <tr>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datefiche", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Client", array()), "prenomprop", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "prestation", array()), "html", null, true);
            echo "</td>
                                    <td>
                                         <a class=\"btn btn-primary\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\" role=\"button\"><i class=\"fa fa-pencil\"></i></a></td>
                                       <!--    <li>
                                             <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                          </li>
                                          <li>
                                             <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                          </li>
                                       </ul> -->
                                    </td>
                                 </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"tab2primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
                           <h5>All Files</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Worker</th>
                                        <th>Problem Description</th>
                                        <th>Diagnosis</th>
                                        <th>Solution</th>
                                        <th>Repair Type</th>
                                        <th>Cost</th>
                                        <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 86
            echo "                                 <tr>
                                    <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fiche"], "datefiche", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Client", array()), "prenomprop", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "Emp", array()), "prenomemp", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "prestation", array()), "html", null, true);
            echo "</td>                                  
                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "diagfiche", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "solutionfiche", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "typereparation", array()), "html", null, true);
            echo "</td>
                                    <td>NEEDS FIX</td>
                                    <td>
                                       <a class=\"btn btn-warning\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                       <!-- <ul>
                                          <li>
                                             <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_show", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                          </li>
                                          <li>
                                             <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_edit", array("id" => $this->getAttribute($context["fiche"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                          </li> -->
                                       </ul>
                                    </td>
                                 </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
";
        
        $__internal_a1f54d3731795e3055a8fc1e2907dcc4c929c14af9c80451c038ef6e9df243d3->leave($__internal_a1f54d3731795e3055a8fc1e2907dcc4c929c14af9c80451c038ef6e9df243d3_prof);

        
        $__internal_94f6e2210fe86b96830d70d95a87812c2bbdb532ea229b7b5e3bf1894ed71268->leave($__internal_94f6e2210fe86b96830d70d95a87812c2bbdb532ea229b7b5e3bf1894ed71268_prof);

    }

    public function getTemplateName()
    {
        return "fiche/index-worker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 108,  213 => 102,  207 => 99,  201 => 96,  195 => 93,  191 => 92,  187 => 91,  183 => 90,  179 => 89,  175 => 88,  171 => 87,  168 => 86,  164 => 85,  133 => 56,  121 => 50,  115 => 47,  110 => 45,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  90 => 39,  86 => 38,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"container\">
   <div class=\"pull-middle\">
      <input  type=\"checkbox\" checked data-toggle=\"toggle\" data-on=\"<i class='fa fa-thumbs-up'></i> Available\" data-off=\"<i class='fa fa-thumbs-down'></i> Busy\" data-onstyle=\"success\" data-offstyle=\"danger\" data-width=\"100\"> 
   </div>
   <div class=\"span12\">
      <div class=\"panel with-nav-tabs panel-primary\">
         <div class=\"panel-heading\">
            <ul class=\"nav nav-tabs\">
               <li class=\"active\"><a href=\"#tab1primary\" data-toggle=\"tab\">Complete</a>
               </li>
               <li><a href=\"#tab2primary\" data-toggle=\"tab\">Show All</a>
               </li>
            </ul>
         </div>
         <div class=\"panel-body\">
            <div class=\"tab-content\">
               <div class=\"tab-pane fade in active\" id=\"tab1primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
                           <h5>All Files</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                                <th>File ID</th>
                                                <th>Date</th>
                                                <th>Client</th>
                                                <th>Problem Description</th>
                                                <th>Add (Diagnosis, Solution ..)</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 {% for fiche in fiches %}
                                 <tr>
                                    <td>{{ fiche.id }}</td>
                                    <td>{{ fiche.datefiche|date('d-m-Y') }}</td>
                                    <td>{{ fiche.Client.prenomprop }}</td>
                                    <td>{{ fiche.prestation }}</td>
                                    <td>
                                         <a class=\"btn btn-primary\" href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\" role=\"button\"><i class=\"fa fa-pencil\"></i></a></td>
                                       <!--    <li>
                                             <a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">show</a>
                                          </li>
                                          <li>
                                             <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">edit</a>
                                          </li>
                                       </ul> -->
                                    </td>
                                 </tr>
                                 {% endfor %}
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=\"tab-pane fade\" id=\"tab2primary\">
                  <div class=\"container-fluid\">
                     <div class=\"widget-box\">
                        <div class=\"widget-title\">
                           <span class=\"icon\"><i class=\"fa fa-file-text-o\"></i></span>
                           <h5>All Files</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                           <table class=\"table table-bordered data-table\">
                              <thead>
                                 <tr>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Worker</th>
                                        <th>Problem Description</th>
                                        <th>Diagnosis</th>
                                        <th>Solution</th>
                                        <th>Repair Type</th>
                                        <th>Cost</th>
                                        <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 {% for fiche in fiches %}
                                 <tr>
                                    <td>{{ fiche.datefiche|date('d-m-Y') }}</td>
                                    <td>{{ fiche.Client.prenomprop }}</td>
                                    <td>{{ fiche.Emp.prenomemp }}</td>
                                    <td>{{ fiche.prestation }}</td>                                  
                                    <td>{{ fiche.diagfiche }}</td>
                                    <td>{{ fiche.solutionfiche }}</td>
                                    <td>{{ fiche.typereparation }}</td>
                                    <td>NEEDS FIX</td>
                                    <td>
                                       <a class=\"btn btn-warning\" href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">Edit</a>
                                       <!-- <ul>
                                          <li>
                                             <a href=\"{{ path('fiche_show', { 'id': fiche.id }) }}\">show</a>
                                          </li>
                                          <li>
                                             <a href=\"{{ path('fiche_edit', { 'id': fiche.id }) }}\">edit</a>
                                          </li> -->
                                       </ul>
                                    </td>
                                 </tr>
                                 {% endfor %}
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{% endblock %}", "fiche/index-worker.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\fiche\\index-worker.html.twig");
    }
}
