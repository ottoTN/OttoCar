<?php

/* employe/show.html.twig */
class __TwigTemplate_9a3597cae83616762d59e10f10ae80f9b48885bbf01b697fd1b314bbafd2ca38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employe/show.html.twig", 1);
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
        $__internal_8a24ce11868ca154e953a1873781d1e561d87b33428802341cb849464bdfbbdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a24ce11868ca154e953a1873781d1e561d87b33428802341cb849464bdfbbdd->enter($__internal_8a24ce11868ca154e953a1873781d1e561d87b33428802341cb849464bdfbbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/show.html.twig"));

        $__internal_65eb98c7dffe887de9ec1476560e81666e771ad910f05b14b653fa90ef84a817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65eb98c7dffe887de9ec1476560e81666e771ad910f05b14b653fa90ef84a817->enter($__internal_65eb98c7dffe887de9ec1476560e81666e771ad910f05b14b653fa90ef84a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employe/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a24ce11868ca154e953a1873781d1e561d87b33428802341cb849464bdfbbdd->leave($__internal_8a24ce11868ca154e953a1873781d1e561d87b33428802341cb849464bdfbbdd_prof);

        
        $__internal_65eb98c7dffe887de9ec1476560e81666e771ad910f05b14b653fa90ef84a817->leave($__internal_65eb98c7dffe887de9ec1476560e81666e771ad910f05b14b653fa90ef84a817_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdd999512e75241fcb6e2c6950e811018222c22f2dc011ec59097463e80f5dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd999512e75241fcb6e2c6950e811018222c22f2dc011ec59097463e80f5dc9->enter($__internal_fdd999512e75241fcb6e2c6950e811018222c22f2dc011ec59097463e80f5dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2e8470509fe06ef589f9ae34cf33e43bc985823b0bfe4d828ec2c012de9c135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e8470509fe06ef589f9ae34cf33e43bc985823b0bfe4d828ec2c012de9c135->enter($__internal_c2e8470509fe06ef589f9ae34cf33e43bc985823b0bfe4d828ec2c012de9c135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Employe</h1>

    <table>
        <tbody>
            <tr>
                <th>Cinemp</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "cinemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomemp</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "nomemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomemp</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "prenomemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statutsoc</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "statutsoc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresseemp</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "adresseemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datenaissemp</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "datenaissemp", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "datenaissemp", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Telemp</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "telemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typeemp</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "typeemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salaire</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "salaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Statutemp</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "statutemp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employe_edit", array("id" => $this->getAttribute((isset($context["employe"]) ? $context["employe"] : $this->getContext($context, "employe")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c2e8470509fe06ef589f9ae34cf33e43bc985823b0bfe4d828ec2c012de9c135->leave($__internal_c2e8470509fe06ef589f9ae34cf33e43bc985823b0bfe4d828ec2c012de9c135_prof);

        
        $__internal_fdd999512e75241fcb6e2c6950e811018222c22f2dc011ec59097463e80f5dc9->leave($__internal_fdd999512e75241fcb6e2c6950e811018222c22f2dc011ec59097463e80f5dc9_prof);

    }

    public function getTemplateName()
    {
        return "employe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  151 => 63,  145 => 60,  139 => 57,  129 => 50,  122 => 46,  115 => 42,  108 => 38,  101 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Employe</h1>

    <table>
        <tbody>
            <tr>
                <th>Cinemp</th>
                <td>{{ employe.cinemp }}</td>
            </tr>
            <tr>
                <th>Nomemp</th>
                <td>{{ employe.nomemp }}</td>
            </tr>
            <tr>
                <th>Prenomemp</th>
                <td>{{ employe.prenomemp }}</td>
            </tr>
            <tr>
                <th>Statutsoc</th>
                <td>{{ employe.statutsoc }}</td>
            </tr>
            <tr>
                <th>Adresseemp</th>
                <td>{{ employe.adresseemp }}</td>
            </tr>
            <tr>
                <th>Datenaissemp</th>
                <td>{% if employe.datenaissemp %}{{ employe.datenaissemp|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Telemp</th>
                <td>{{ employe.telemp }}</td>
            </tr>
            <tr>
                <th>Typeemp</th>
                <td>{{ employe.typeemp }}</td>
            </tr>
            <tr>
                <th>Salaire</th>
                <td>{{ employe.salaire }}</td>
            </tr>
            <tr>
                <th>Statutemp</th>
                <td>{{ employe.statutemp }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ employe.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('employe_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('employe_edit', { 'id': employe.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "employe/show.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar\\app\\Resources\\views\\employe\\show.html.twig");
    }
}
