<?php

/* employe/index-manager.html.twig */
class __TwigTemplate_eab160328936d6707e163fb866450c3f9f6104959b91221a17c32ca8d5f1c718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employe/index-manager.html.twig", 1);
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
        $__internal_51c399a75eea301bd4ee5715dde7e4db967f87dfeba38bdddabd18efafe56570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c399a75eea301bd4ee5715dde7e4db967f87dfeba38bdddabd18efafe56570->enter($__internal_51c399a75eea301bd4ee5715dde7e4db967f87dfeba38bdddabd18efafe56570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/index-manager.html.twig"));

        $__internal_805d4b838b90a255ea3ceaf3a3f231a96ae30a89bc502845fc6e65028666f765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805d4b838b90a255ea3ceaf3a3f231a96ae30a89bc502845fc6e65028666f765->enter($__internal_805d4b838b90a255ea3ceaf3a3f231a96ae30a89bc502845fc6e65028666f765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/index-manager.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51c399a75eea301bd4ee5715dde7e4db967f87dfeba38bdddabd18efafe56570->leave($__internal_51c399a75eea301bd4ee5715dde7e4db967f87dfeba38bdddabd18efafe56570_prof);

        
        $__internal_805d4b838b90a255ea3ceaf3a3f231a96ae30a89bc502845fc6e65028666f765->leave($__internal_805d4b838b90a255ea3ceaf3a3f231a96ae30a89bc502845fc6e65028666f765_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c3fffafcdf4d708fdd377463d1d52772ab516d9e50f39c778551d9bbc904f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3fffafcdf4d708fdd377463d1d52772ab516d9e50f39c778551d9bbc904f5e->enter($__internal_7c3fffafcdf4d708fdd377463d1d52772ab516d9e50f39c778551d9bbc904f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6c82e41b25957e1887abd7f0451d351bb72cade26ed776be9e7389fc1cb383b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c82e41b25957e1887abd7f0451d351bb72cade26ed776be9e7389fc1cb383b->enter($__internal_a6c82e41b25957e1887abd7f0451d351bb72cade26ed776be9e7389fc1cb383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h1> WARNING !</h1>
            </div>
            <div class=\"modal-body\">
                <h3>Are you sure you want to delete this Worker ?</h3>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Yes</button>
                <a data-dismiss=\"modal\" class=\"btn btn-default btn-ok\">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!--End Of Modal -->

<div class=\"widget-box\">
            <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-user\"></i></span>
              <h5>All Employees</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
    <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                 <th>C.I.N</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Social Status</th>
                  <th>Adress</th>
                  <th>Date of birth</th>
                  <th>Phone</th>
                  <th>Type</th>
                  <th>Salary</th>
                  <th>Manage</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employes"]) ? $context["employes"] : $this->getContext($context, "employes")));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 46
            echo "            <tr>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "cinemp", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "nomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "prenomemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "statutsoc", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "adresseemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            if ($this->getAttribute($context["employe"], "datenaissemp", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["employe"], "datenaissemp", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "telemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "typeemp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["employe"], "salaire", array()), "html", null, true);
            echo "</td>
                <td>
                <a class=\"btn btn-warning\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_edit", array("id" => $this->getAttribute($context["employe"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete </button>
                    <!-- <ul>
                        <li>
                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_show", array("id" => $this->getAttribute($context["employe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_edit", array("id" => $this->getAttribute($context["employe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
            </table>
          </div>
    </div>
";
        
        $__internal_a6c82e41b25957e1887abd7f0451d351bb72cade26ed776be9e7389fc1cb383b->leave($__internal_a6c82e41b25957e1887abd7f0451d351bb72cade26ed776be9e7389fc1cb383b_prof);

        
        $__internal_7c3fffafcdf4d708fdd377463d1d52772ab516d9e50f39c778551d9bbc904f5e->leave($__internal_7c3fffafcdf4d708fdd377463d1d52772ab516d9e50f39c778551d9bbc904f5e_prof);

    }

    public function getTemplateName()
    {
        return "employe/index-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 71,  155 => 65,  149 => 62,  141 => 57,  136 => 55,  132 => 54,  128 => 53,  122 => 52,  118 => 51,  114 => 50,  110 => 49,  106 => 48,  102 => 47,  99 => 46,  95 => 45,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
<!-- Modal -->
<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h1> WARNING !</h1>
            </div>
            <div class=\"modal-body\">
                <h3>Are you sure you want to delete this Worker ?</h3>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Yes</button>
                <a data-dismiss=\"modal\" class=\"btn btn-default btn-ok\">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!--End Of Modal -->

<div class=\"widget-box\">
            <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-user\"></i></span>
              <h5>All Employees</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('employe_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
    <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                 <th>C.I.N</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Social Status</th>
                  <th>Adress</th>
                  <th>Date of birth</th>
                  <th>Phone</th>
                  <th>Type</th>
                  <th>Salary</th>
                  <th>Manage</th>
            </tr>
        </thead>
        <tbody>
        {% for employe in employes %}
            <tr>
                <td>{{ employe.cinemp }}</a></td>
                <td>{{ employe.nomemp }}</td>
                <td>{{ employe.prenomemp }}</td>
                <td>{{ employe.statutsoc }}</td>
                <td>{{ employe.adresseemp }}</td>
                <td>{% if employe.datenaissemp %}{{ employe.datenaissemp|date('d/m/Y') }}{% endif %}</td>
                <td>{{ employe.telemp }}</td>
                <td>{{ employe.typeemp }}</td>
                <td>{{ employe.salaire }}</td>
                <td>
                <a class=\"btn btn-warning\" href=\"{{ path('employe_edit', { 'id': employe.id }) }}\">Edit</a>
                <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">
                Delete </button>
                    <!-- <ul>
                        <li>
                            <a href=\"{{ path('employe_show', { 'id': employe.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('employe_edit', { 'id': employe.id }) }}\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        {% endfor %}
        </tbody>
            </table>
          </div>
    </div>
{% endblock %}
", "employe/index-manager.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\employe\\index-manager.html.twig");
    }
}
