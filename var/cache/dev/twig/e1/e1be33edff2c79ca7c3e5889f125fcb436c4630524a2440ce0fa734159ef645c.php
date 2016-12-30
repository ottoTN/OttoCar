<?php

/* compte/show.html.twig */
class __TwigTemplate_509cda64338ca2856d21114a2d4b267ceb182317dcbffab6889059100bf90c95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "compte/show.html.twig", 1);
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
        $__internal_6c7285f66ad59c1a8e1986aa0ef55cef4d92304211c47b1e8cb879817585c154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7285f66ad59c1a8e1986aa0ef55cef4d92304211c47b1e8cb879817585c154->enter($__internal_6c7285f66ad59c1a8e1986aa0ef55cef4d92304211c47b1e8cb879817585c154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/show.html.twig"));

        $__internal_17c0bc0004dde38ef9af44dc521ee9707ad843aab9f85b2a9db484b21a2b1fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c0bc0004dde38ef9af44dc521ee9707ad843aab9f85b2a9db484b21a2b1fba->enter($__internal_17c0bc0004dde38ef9af44dc521ee9707ad843aab9f85b2a9db484b21a2b1fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "compte/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c7285f66ad59c1a8e1986aa0ef55cef4d92304211c47b1e8cb879817585c154->leave($__internal_6c7285f66ad59c1a8e1986aa0ef55cef4d92304211c47b1e8cb879817585c154_prof);

        
        $__internal_17c0bc0004dde38ef9af44dc521ee9707ad843aab9f85b2a9db484b21a2b1fba->leave($__internal_17c0bc0004dde38ef9af44dc521ee9707ad843aab9f85b2a9db484b21a2b1fba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08db881c760882f091d31f41a1fd0a7b07507ba3f7fbbabb0dc6e78f2f2928c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08db881c760882f091d31f41a1fd0a7b07507ba3f7fbbabb0dc6e78f2f2928c6->enter($__internal_08db881c760882f091d31f41a1fd0a7b07507ba3f7fbbabb0dc6e78f2f2928c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_951a067736fc5bf07c449aeb5a42a8e06ab19934f453055f6a5ccba4a684827f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951a067736fc5bf07c449aeb5a42a8e06ab19934f453055f6a5ccba4a684827f->enter($__internal_951a067736fc5bf07c449aeb5a42a8e06ab19934f453055f6a5ccba4a684827f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"createCompteReceptionnist.html\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordere data-table\">
              <thead>
                <th>Nomprop</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "nomprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomprop</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "prenomprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telprop</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "telprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresseprop</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "adresseprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mailprop</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "mailprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modelevoit</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "modelevoit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marquevoit</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "marquevoit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Immatvoit</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "immatvoit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cinprop</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "cinprop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
            </table>
          </div>
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compte_edit", array("id" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_951a067736fc5bf07c449aeb5a42a8e06ab19934f453055f6a5ccba4a684827f->leave($__internal_951a067736fc5bf07c449aeb5a42a8e06ab19934f453055f6a5ccba4a684827f_prof);

        
        $__internal_08db881c760882f091d31f41a1fd0a7b07507ba3f7fbbabb0dc6e78f2f2928c6->leave($__internal_08db881c760882f091d31f41a1fd0a7b07507ba3f7fbbabb0dc6e78f2f2928c6_prof);

    }

    public function getTemplateName()
    {
        return "compte/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 66,  147 => 64,  141 => 61,  135 => 58,  124 => 50,  117 => 46,  110 => 42,  103 => 38,  96 => 34,  89 => 30,  82 => 26,  75 => 22,  68 => 18,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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

  <div class=\"widget-box\">
          <div class=\"widget-title\"> <span class=\"icon\"><i class=\"fa fa-id-card-o\"></i></span>
            <h5>All Accounts</h5>
             <div style=\"padding-top: 0.2%\"><a class=\"btn btn-info\"  href=\"createCompteReceptionnist.html\"><i class=\"fa fa-plus-circle\"></i></a></div>
          </div>
          <div class=\"widget-content nopadding\">
            <table class=\"table table-bordere data-table\">
              <thead>
                <th>Nomprop</th>
                <td>{{ compte.nomprop }}</td>
            </tr>
            <tr>
                <th>Prenomprop</th>
                <td>{{ compte.prenomprop }}</td>
            </tr>
            <tr>
                <th>Telprop</th>
                <td>{{ compte.telprop }}</td>
            </tr>
            <tr>
                <th>Adresseprop</th>
                <td>{{ compte.adresseprop }}</td>
            </tr>
            <tr>
                <th>Mailprop</th>
                <td>{{ compte.mailprop }}</td>
            </tr>
            <tr>
                <th>Modelevoit</th>
                <td>{{ compte.modelevoit }}</td>
            </tr>
            <tr>
                <th>Marquevoit</th>
                <td>{{ compte.marquevoit }}</td>
            </tr>
            <tr>
                <th>Immatvoit</th>
                <td>{{ compte.immatvoit }}</td>
            </tr>
            <tr>
                <th>Cinprop</th>
                <td>{{ compte.cinprop }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ compte.id }}</td>
            </tr>
        </tbody>
            </table>
          </div>
    </div>
    <ul>
        <li>
            <a href=\"{{ path('compte_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('compte_edit', { 'id': compte.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}


", "compte/show.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\compte\\show.html.twig");
    }
}
