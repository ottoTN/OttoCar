<?php

/* utilisateur/index-manager.html.twig */
class __TwigTemplate_2556382c34fa20d17e3b5ab24d740651fdec4623c5b6e99f46b2acce523b4e39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/index-manager.html.twig", 1);
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
        $__internal_f627dc6278ebf412ffa63af41765047b1f3edfdfeb67b232f8d0102cca63fa1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f627dc6278ebf412ffa63af41765047b1f3edfdfeb67b232f8d0102cca63fa1a->enter($__internal_f627dc6278ebf412ffa63af41765047b1f3edfdfeb67b232f8d0102cca63fa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/index-manager.html.twig"));

        $__internal_f7b692100c2f6901d51efcd54d9742786b506708fb03dcba70735a693ba224c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b692100c2f6901d51efcd54d9742786b506708fb03dcba70735a693ba224c9->enter($__internal_f7b692100c2f6901d51efcd54d9742786b506708fb03dcba70735a693ba224c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/index-manager.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f627dc6278ebf412ffa63af41765047b1f3edfdfeb67b232f8d0102cca63fa1a->leave($__internal_f627dc6278ebf412ffa63af41765047b1f3edfdfeb67b232f8d0102cca63fa1a_prof);

        
        $__internal_f7b692100c2f6901d51efcd54d9742786b506708fb03dcba70735a693ba224c9->leave($__internal_f7b692100c2f6901d51efcd54d9742786b506708fb03dcba70735a693ba224c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ccc8dad9ac36ff8c5a82376f3abda68ce33bcd655c7a74f334448da4a46d4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccc8dad9ac36ff8c5a82376f3abda68ce33bcd655c7a74f334448da4a46d4dd->enter($__internal_9ccc8dad9ac36ff8c5a82376f3abda68ce33bcd655c7a74f334448da4a46d4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9df620d05a1722a967cebe241e5b5853fc8dd5e10343f904d32f16c8494e3376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df620d05a1722a967cebe241e5b5853fc8dd5e10343f904d32f16c8494e3376->enter($__internal_9df620d05a1722a967cebe241e5b5853fc8dd5e10343f904d32f16c8494e3376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Modal -->
<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h1> WARNING !</h1>
            </div>
            <div class=\"modal-body\">
                <h3>Are you sure you want to delete this User ?</h3>
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
            <h5>All Users</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Login</th>
                <th>Passwords</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 40
            echo "            <tr>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "login", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "mdp", array()), "html", null, true);
            echo "</td>
                <td>
                <a class=\"btn btn-warning\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_edit", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
  <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">Delete 
                </button>
                    <!-- <ul>
                        <li>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_edit", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
</div>
</div>
   <!--  <ul>
        <li>
            <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_new");
        echo "\">Create a new utilisateur</a>
        </li>
    </ul> -->
";
        
        $__internal_9df620d05a1722a967cebe241e5b5853fc8dd5e10343f904d32f16c8494e3376->leave($__internal_9df620d05a1722a967cebe241e5b5853fc8dd5e10343f904d32f16c8494e3376_prof);

        
        $__internal_9ccc8dad9ac36ff8c5a82376f3abda68ce33bcd655c7a74f334448da4a46d4dd->leave($__internal_9ccc8dad9ac36ff8c5a82376f3abda68ce33bcd655c7a74f334448da4a46d4dd_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/index-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 65,  135 => 59,  123 => 53,  117 => 50,  109 => 45,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
                <h3>Are you sure you want to delete this User ?</h3>
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
            <h5>All Users</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"{{ path('utilisateur_new') }}\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordered data-table\">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Login</th>
                <th>Passwords</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for utilisateur in utilisateurs %}
            <tr>
                <td>{{ utilisateur.id }}</td>
                <td>{{ utilisateur.login }}</td>
                <td>{{ utilisateur.mdp }}</td>
                <td>
                <a class=\"btn btn-warning\" href=\"{{ path('utilisateur_edit', { 'id': utilisateur.id }) }}\">Edit</a>
  <button class=\"btn btn-danger\" data-href=\"/delete.php?id=54\" data-toggle=\"modal\" data-target=\"#confirm-delete\">Delete 
                </button>
                    <!-- <ul>
                        <li>
                            <a href=\"{{ path('utilisateur_show', { 'id': utilisateur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('utilisateur_edit', { 'id': utilisateur.id }) }}\">edit</a>
                        </li>
                    </ul> -->
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
</div>
   <!--  <ul>
        <li>
            <a href=\"{{ path('utilisateur_new') }}\">Create a new utilisateur</a>
        </li>
    </ul> -->
{% endblock %}
", "utilisateur/index-manager.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\utilisateur\\index-manager.html.twig");
    }
}
